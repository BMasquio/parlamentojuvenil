<?php

namespace App\Services\SocialLogin;

use App\Models\SocialNetwork;
use Illuminate\Support\Str;

class SocialNetworkUser
{
    public $user;

    public $social_network_slug;

    public $social_network_name;

    public $social_network;

    public function __construct($user, $socialNetwork)
    {
        $this->populateSocialNetwork($user, $socialNetwork);
    }

    public function __call($method, $parameters)
    {
        if (method_exists($this, $method)) {
            return call_user_func_array([$this, $method], (array) $parameters);
        }

        return call_user_func_array(
            [$this->user, $method],
            (array) $parameters
        );
    }

    /**
     * @param $socialNetwork
     * @param $socialNetworkUser
     */
    protected function makeEmail($socialNetwork, $socialNetworkUser)
    {
        $this->email =
            $socialNetworkUser->getEmail() ?:
            sprintf(
                '%s@%s.' . config('app.domain'),
                $socialNetworkUser->getId(),
                $socialNetwork->slug
            );

        $this->user->email = $this->email;
    }

    /**
     * @param $socialNetwork
     */
    protected function populateSocialNetwork($socialNetworkUser, $socialNetwork)
    {
        $this->user = $socialNetworkUser;

        $this->social_network_slug = Str::snake($socialNetwork->slug);

        $this->social_network_name = $socialNetwork->name;

        $this->email = $this->makeEmail($socialNetwork, $socialNetworkUser);

        $this->social_network = SocialNetwork::where(
            'slug',
            $this->social_network_slug
        )->first();
    }

    public function serialize()
    {
        return json_encode($this->user);
    }
}
