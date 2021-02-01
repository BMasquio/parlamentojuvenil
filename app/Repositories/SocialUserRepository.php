<?php

namespace App\Repositories;

use App\Data\Models\User;
use App\Data\Models\SocialUser;
use Illuminate\Support\Facades\Hash;

class SocialUserRepository
{
    public function find($id)
    {
        return SocialUser::find($id);
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function findBySocialNetworkUserId($socialNetworkUserId)
    {
        return SocialUser::where(
            'social_network_user_id',
            $socialNetworkUserId
        )->first();
    }

    public function findOtherSocialUsersByStudentId(
        $studentId,
        $social_network_user_id
    ) {
        return SocialUser::where('student_id', $studentId)
            ->where('social_network_user_id', '!=', $social_network_user_id)
            ->whereNotNull('user_id')
            ->get();
    }

    public function findByStudentId($id)
    {
        return SocialUser::where('student_id', $id)->first();
    }

    public function updateSocialUser($userId, $studentId, $socialUserId)
    {
        $socialUser = $this->find($socialUserId);
        $socialUser->user_id = $userId;
        $socialUser->student_id = $studentId;
        $socialUser->save();
    }

    public function updateSocialUserAndCreateUser(
        $studentId,
        $socialUserId,
        $email,
        $socialUserPlatform
    ) {
        $socialUser = $this->find($socialUserId);
        $socialUser->student_id = $studentId;
        $user = $this->createUser($email, $socialUserPlatform);
        $socialUser->user_id = $user->id;
        $socialUser->save();
    }

    public function createSocialUser($socialNetworkUser)
    {
        return SocialUser::create([
            'social_network_id' => $socialNetworkUser->social_network->id,
            'social_network_user_id' => $socialNetworkUser->getId(),
            'data' => $socialNetworkUser->serialize(),
        ]);
    }

    public function createUser($socialNetworkUser)
    {
        $user = new User();

        $unknown = '<nome desconhecido>';

        $name = $socialNetworkUser->getName();

        $nickname = $socialNetworkUser->getNickname();

        $email = $socialNetworkUser->getEmail();

        $user->nickname = $nickname ?: $name ?: $email ?: $unknown;

        $user->name = $name ?: $nickname ?: $email ?: $unknown;

        $user->email = $email;

        $user->password = Hash::make(str_random(128));

        $user->avatar = $socialNetworkUser->getAvatar();

        $user->save();

        return $user;
    }
}
