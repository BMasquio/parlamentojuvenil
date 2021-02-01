<?php

namespace App\Http\Controllers;

use App\Data\Models\User;
use App\Data\Repositories\FlagContest;
use DB;
use App\Data\Models\Seeduc;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as BaseController;

class ApiSearch extends BaseController
{
    protected function makeWildcardSearchable($name)
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
            $query->where('matricula', 'like', '%' . $registration . '%');
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

            $query->whereRaw("lower(unaccent(users.name)) like '{$name}'");
        }

        if ($email = trim((string) $request->get('email'))) {
            $query->where('users.email', 'like', '%' . $email . '%');
        }

        $query->join('social_users', 'social_users.user_id', '=', 'users.id');

        $query->join(
            'social_networks',
            'social_networks.id',
            '=',
            'social_users.social_network_id'
        );

        if (empty($email) && empty($name)) {
            return [];
        }

        return $query->get();
    }

    public function contest(FlagContest $flagContest)
    {
        return $flagContest->all();
    }

    public function contestVotes(FlagContest $flagContest)
    {
        return $flagContest->allFlagsWithVotes()->map(function ($flag) {
            $flag['thumbnail_url'] = $flag->thumbnail_url;

            $flag['image_url'] = $flag->image_url;

            $flag['valid_vote_count'] = $flag
                ->votes()
                ->where('is_valid', true)
                ->count();

            $flag['invalid_vote_count'] = $flag
                ->votes()
                ->where('is_valid', false)
                ->count();

            return $flag;
        });
    }
}
