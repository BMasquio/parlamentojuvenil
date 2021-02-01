<?php

namespace App\Data\Repositories;

use App\Models\User;
use App\Models\SocialUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Exceptions\Authentication as AuthenticationException;

class Users extends Repository
{
    protected function findUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    public function register($credentials)
    {
        if ($this->findUserByEmail($credentials['email'])) {
            throw new AuthenticationException(
                'Este e-mail já está registrado.'
            );
        }

        return User::create([
            'email' => $credentials['email'],
            'password' => Hash::make($credentials['password']),
        ]);
    }

    public function findStudentByUser($user)
    {
        $socialUser = $user
            ? SocialUser::where('user_id', $user->id)->first()
            : null;

        return $socialUser ? $socialUser->student : null;
    }

    public function recoverPassword($input)
    {
        if (!($user = User::where('email', $input['email'])->first())) {
            return false;
        }

        $user->password = Hash::make($password = str_random(10));

        $user->save();

        Mail::send(
            'emails.password_reset',
            ['user' => $user, 'password' => $password],
            function ($message) use ($user) {
                $message
                    ->to($user->email)
                    ->subject('Sua nova senha no Parlamento Juvenil');
            }
        );

        return true;
    }
}
