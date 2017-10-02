<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecoverPassword;
use App\Http\Requests\UserRegister;
use Auth as IlluminateAuth;
use App\Services\SocialLogin\SocialUserService;
use App\Services\SocialLogin\EmailAuthProvider;
use App\Data\Repositories\Data as DataRepository;
use App\Data\Repositories\Users as UsersRepository;
use App\Http\Controllers\Controller as BaseController;

class EmailAuth extends BaseController
{
    /**
     * @var Users
     */
    protected $usersRepository;

    /**
     * @var SocialUserService
     */
    protected $socialUserService;

    public function __construct(UsersRepository $usersRepository, DataRepository $dataRepository, SocialUserService $socialUserService)
    {
        parent::__construct($dataRepository);

        $this->usersRepository = $usersRepository;

        $this->socialUserService = $socialUserService;
    }

    public function index($year = null)
    {
        return $this->buildView('auth.email.index', $year);
    }

    protected function loginUser($user)
    {
        loggedUser()->user = $user;

        $this->socialUserService->socialNetworkLogin(loggedUser()->socialNetwork = 'email');

        return $this->redirectToIntended();
    }

    public function post(UserRegister $userRegister)
    {
        if (IlluminateAuth::attempt(request()->only(['email', 'password']))) {
            return $this->loginUser(IlluminateAuth::user());
        }

        return redirect()
                ->back()
                ->withInput()
                ->withErrors('Usuário ou senha inválido.');
    }

    public function register(UserRegister $userRegister)
    {
        if ($user = $this->usersRepository->register(request()->only(['email', 'password']))) {
            return $this->loginUser($user);
        }

        return redirect()
            ->back()
            ->withInput()
            ->withErrors('Erro ao registrar usuário.');
    }

    public function student()
    {
        if (is_null($this->usersRepository->findStudentByUser(loggedUser()->user))) {
            $socialNetworkProvider = new EmailAuthProvider();

            $this->socialUserService->socialNetworkLogin($socialNetworkProvider);

            return view('2017.partials.subscribe-form-register-and-birthdate');
        }

        return redirect()->intended();
    }

    public function password($year = null)
    {
        return $this->buildView('auth.email.password', $year);
    }

    public function resetPassword(RecoverPassword $recoverPasswordValidation)
    {
        if ($this->usersRepository->recoverPassword($recoverPasswordValidation->all())) {
            return view('2017.messages.show')
                ->with('message', 'Uma mensagem com a nova senha foi enviado para o sua caixa postal.');
        }

        return view('2017.messages.show')
            ->with('message', 'Email não encontrado. Por favor entre em contato com a administração do Parlamento Juvenil.');
    }
}
