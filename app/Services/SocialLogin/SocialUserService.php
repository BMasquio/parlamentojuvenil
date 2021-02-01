<?php

namespace App\Services\SocialLogin;

use Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Data\Models\User;
use League\Flysystem\Exception;
use App\Data\Models\SocialUser;
use App\Data\Models\SocialNetwork;
use Illuminate\Support\Facades\Hash;
use App\Repositories\UsersRepository;
use App\Data\Repositories\Subscriptions;
use App\Repositories\SocialUserRepository;
use Laravel\Socialite\Two\User as SocialiteUser;

class SocialUserService
{
    protected $socialUserRepository;

    protected $usersRepository;
    /**
     * @var Subscriptions
     */
    private $subscriptionsRepository;

    public function __construct(
        SocialUserRepository $socialUserRepository,
        UsersRepository $usersRepository,
        Subscriptions $subscriptionsRepository
    ) {
        $this->socialUserRepository = $socialUserRepository;

        $this->usersRepository = $usersRepository;

        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    protected function createSocialUserForEmail()
    {
        $user = new SocialiteUser();

        $user->email = loggedUser()->user->email;

        $user->id = sha1(loggedUser()->user->email);

        return $user;
    }

    public function findOrCreate($socialNetwork, $socialNetworkUser)
    {
        return $this->findOrCreateSocialUser(
            $socialNetworkUser,
            $socialNetwork
        );
    }

    protected function findOrCreateDataForSocialNetworkUser($socialNetwork)
    {
        $socialNetworkUser = $this->makeSocialNetworkUser($socialNetwork);

        list(
            $socialUser,
            $user,
            $student,
        ) = $this->findOrCreateSocialUserAndStudent($socialNetworkUser);

        return [$socialUser, $user, $student, $socialNetworkUser];
    }

    protected function findOrCreateSocialUserAndStudent($socialNetworkUser)
    {
        $socialUser = $this->findOrCreateSocialUser($socialNetworkUser);

        if (
            $user = $this->findOrCreateUserBySocialUser(
                $socialUser,
                $socialNetworkUser
            )
        ) {
            $socialUser->user()->associate($user->id);
        }

        if (
            $student = $this->findStudentBySocialUser(
                $socialUser,
                $socialNetworkUser
            )
        ) {
            $socialUser->student()->associate($student->id);
        }

        $socialUser->save();

        return [$socialUser, $user, $student];
    }

    /**
     * @param $email
     * @return static
     */
    protected function findOrCreateUserByEmail($email)
    {
        if (!is_null($user = User::where('email', $email)->first())) {
            return $user;
        }

        return User::create([
            'email' => $email,
            'password' => Hash::make(str_random(128)),
        ]);
    }

    protected function findSocialNetworkBySlug($slug)
    {
        if (
            is_null(
                $socialNetwork = SocialNetwork::where(
                    'slug',
                    snake_case($slug)
                )->first()
            )
        ) {
            throw new Exception('Social network not found: ' . $socialNetwork);
        }

        return $socialNetwork;
    }

    protected function findStudentBySocialUser($socialUser, $socialNetworkUser)
    {
        if (is_null($student = $socialUser->student)) {
            $socialUsers = SocialUser::where('user_id', $socialUser->user_id)
                ->where(
                    'social_network_id',
                    '!=',
                    $socialNetworkUser->social_network->id
                )
                ->get();

            if ($socialUsers->count() == 1) {
                $student = $socialUsers[0]->student;
            }
        }

        return $student;
    }

    protected function findOrCreateUserBySocialUser(
        $socialUser,
        $socialNetworkUser
    ) {
        if ($user = $socialUser->user) {
            return $user;
        }

        if (
            $user = $this->usersRepository->findByEmail(
                $socialNetworkUser->getEmail()
            )
        ) {
            return $user;
        }

        return $this->socialUserRepository->createUser($socialNetworkUser);
    }

    protected function getFreshSocialUser($socialUser)
    {
        return SocialUser::where('id', $socialUser->id)->first();
    }

    /**
     * @param $socialNetwork
     * @return mixed
     */
    protected function getSocialUserForDriver($socialNetwork)
    {
        if (($slug = $socialNetwork->slug) == 'email') {
            return $this->createSocialUserForEmail();
        }

        $driver = $this->getDriver($slug);

        if (
            $socialNetwork->slug == 'facebook' ||
            $socialNetwork->slug == 'instagram'
        ) {
            $driver->stateless();
        }

        return $driver->user();
    }

    /**
     * @param $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login($user)
    {
        return auth()->login($user);
    }

    public function findOrCreateSocialUser($socialNetworkUser)
    {
        if (
            is_null(
                $user = $this->socialUserRepository->findBySocialNetworkUserId(
                    $socialNetworkUser->getId()
                )
            )
        ) {
            $user = $this->socialUserRepository->createSocialUser(
                $socialNetworkUser
            );
        }

        return $user;
    }

    public function loginSocialUser($student = null)
    {
        if (
            !is_null($student) &&
            is_null(loggedUser()->socialUser->student) &&
            is_null(loggedUser()->student)
        ) {
            loggedUser()->student = $student;

            $this->updateLoggedSocialUser(
                $this->findOrCreateUserByStudent(
                    loggedUser()->student->id,
                    loggedUser()->email,
                    loggedUser()->socialNetworkUser
                )
            );
        }

        Auth::login(loggedUser()->user);

        $this->updateLoggedSubscription();
    }

    public function findOrCreateUserByStudent(
        $studentId,
        $email,
        $socialNetworkUser
    ) {
        $socialUser = $this->socialUserRepository->findBySocialNetworkUserId(
            $socialNetworkUser->getId()
        );

        if (is_null($socialUser->student)) {
            $socialUser->student_id = $studentId;
        }

        if (is_null($user = $socialUser->user)) {
            $socialUserByStudent = $this->socialUserRepository->findOtherSocialUsersByStudentId(
                $studentId,
                $socialNetworkUser->getId()
            );

            if ($socialUserByStudent->count() == 0) {
                $user = $this->findOrCreateUserByEmail($email);
            } else {
                $user = $socialUserByStudent[0]->user;
            }

            $socialUser->user_id = $user->id;

            $this->setUserAvatar($user, $socialNetworkUser->getAvatar());
        }

        $socialUser->save();

        $socialUser = $this->getFreshSocialUser($socialUser);

        if (is_null($socialUser->student->email)) {
            $socialUser->student->email = $email;
            $socialUser->student->save();
        }

        return $socialUser;
    }

    public function makeSocialNetworkUser($socialNetwork)
    {
        return new SocialNetworkUser(
            $this->getSocialUserForDriver($socialNetwork),
            $socialNetwork
        );
    }

    protected function setUserAvatar($user, $avatar)
    {
        if (is_null($user->avatar)) {
            $user->avatar = $avatar;

            $user->save();
        }
    }

    protected function updateLoggedSocialUser($socialUser)
    {
        loggedUser()->socialUser = $socialUser;

        loggedUser()->user = $socialUser->user;

        return $socialUser;
    }

    /**
     * @param $socialNetwork
     */
    public function socialNetworkLogin($socialNetwork)
    {
        $socialNetwork = $this->findSocialNetworkBySlug($socialNetwork);

        list(
            $socialUser,
            $user,
            $student,
            $socialNetworkUser,
        ) = $this->findOrCreateDataForSocialNetworkUser($socialNetwork);

        $this->storeUserInSession(
            $socialNetwork,
            $socialUser,
            $socialNetworkUser,
            $user->email,
            $student
        );

        $this->loginSocialUser();
    }

    protected function isSocialNetworkIsLoggedIn($socialNetwork)
    {
        if (loggedUser()->logged()) {
            return false;
        }

        return loggedUser()->socialNetwork == $socialNetwork;
    }

    public function getDriver($driver)
    {
        return Socialite::driver($driver);
    }

    /**
     * @param $socialNetwork
     * @param $socialUser
     * @param $socialNetworkUser
     */
    protected function storeUserInSession(
        $socialNetwork,
        $socialUser,
        $socialNetworkUser,
        $email
    ) {
        loggedUser()
            ->setSocialNetwork($socialNetwork)
            ->setSocialUser($socialUser)
            ->setUser($socialUser->user)
            ->setStudent($socialUser ? $socialUser->student : null)
            ->setSocialNetworkUser($socialNetworkUser)
            ->setEmail($email);
    }

    private function updateLoggedSubscription()
    {
        loggedUser()->subscription = $this->subscriptionsRepository->findByLoggedUser();
    }
}
