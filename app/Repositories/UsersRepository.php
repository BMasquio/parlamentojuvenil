<?php
/**
 * Created by PhpStorm.
 * User: falbernaz
 * Date: 27/06/2016
 * Time: 10:49.
 */

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Ramsey\Uuid\Uuid;

class UsersRepository
{
    public function all($q)
    {
        $user = new User();

        if ($q) {
            if ($q == 'cidadao') {
                return $user->getUsersCommon();
            } else {
                return $user->getUsersAdm();
            }
        } else {
            return User::all();
        }
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function destroy($id)
    {
        return User::destroy($id);
    }

    public function findByEmail($email)
    {
        $user = new User();

        return $user->getUserByEmail($email);
    }

    public function storeUser()
    {
        $user = new User();
        $user->name = Input::get('name');
        $user->email = Input::get('email');
        $user->password = 'Empty';
        $user->registration = Input::get('registration');
        $user->birthdate = Input::get('birthdate');
        $user->save();
        return $user;
    }
}
