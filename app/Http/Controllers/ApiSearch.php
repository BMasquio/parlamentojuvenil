<?php

namespace App\Http\Controllers;

use App\Data\Entities\User;
use DB;
use App\Data\Entities\Seeduc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class ApiSearch extends BaseController
{
    private function makeWildcardSearchable($name)
    {
        $result = '';

        foreach (explode(' ', mb_strtoclean($name)) as $value) {
            $result .= "{$value}%";
        }

        return "%{$result}";
    }

    public function seeduc(Request $request)
    {
        $query = Seeduc::query();

        if ($name = trim((string) $request->get('name'))) {
            $name = $this->makeWildcardSearchable($name);

            $query->whereRaw("lower(unaccent(nome)) like '{$name}'");
        }

        if ($registration = trim((string) $request->get('registration'))) {
            $query->where('matricula', 'like', '%'.$registration.'%');
        }

        if ($birthdate = trim((string) $request->get('birthdate'))) {
            $query->where('nascimento', string_to_date($birthdate));
        }

        if (empty($registration) && empty($birthdate) && empty($name)) {
            return [];
        }

        return $query->get();
    }

    public function users(Request $request)
    {
        $query = User::query();

        $query->select(
            'users.name',
            'users.nickname',
            'users.email',
            'users.avatar',
            'social_networks.slug as social_network'
        );

        if ($name = trim((string) $request->get('name'))) {
            $name = $this->makeWildcardSearchable($name);

            $query->whereRaw("lower(unaccent(name)) like '{$name}'");
        }

        if ($email = trim((string) $request->get('email'))) {
            $query->where('email', 'like', '%'.$email.'%');
        }

        $query->join('social_users', 'social_users.user_id', '=', 'users.id');

        $query->join('social_networks', 'social_networks.id', '=', 'social_users.social_network_id');

        if (empty($email) && empty($name)) {
            return [];
        }

        return $query->get();
    }
}
