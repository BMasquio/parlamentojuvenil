<?php

namespace App\Services\SocialLogin;

use PhpSpec\Exception\Fracture\MethodNotFoundException;

class LoggedUser
{
    const SESSION_VAR_NAME = 'loggedUser';

    private function convertInnerJsonsToArray($array)
    {
        if (isset($array['social_user']['data'])) {
            $array['social_user']['data'] = json_decode($array['social_user']['data'], true);
        }

        return $array;
    }

    /**
     * @param $key
     * @return null
     */
    private function get($key)
    {
        $key = snake_case($key);

        $value = $this->loadSessionVar();

        $value = isset($value[$key])
                ? $value[$key]
                : null;

        return $value;
    }

    private function loadSessionVar()
    {
        return session(self::SESSION_VAR_NAME);
    }

    private function set($key, $data)
    {
        $key = snake_case($key);

        $loggedUser = $this->loadSessionVar();

        if (isset($loggedUser[$key]) && is_null($data) && ! is_null($loggedUser[$key])) {
            return $this;
        }

        $loggedUser[snake_case($key)] = $data;

        $this->updateSession($loggedUser);

        return $this;
    }

    /**
     * @param $key
     * @return null
     */
    public function __get($key)
    {
        return $this->get($key);
    }

    public function __set($name, $value) {
        return $this->set($name, $value);
    }

    public function __call($name, $arguments) {
        if (method_exists($this, $name)) {
            return call_user_func_array([$this, $name], $arguments);
        }

        if (! starts_with($name, 'set')) {
            throw new MethodNotFoundException("Method $name does not exists.");
        }

        $arguments = array_merge((array) substr($name, 3), $arguments);

        return call_user_func_array([$this, 'set'], $arguments);
    }

    /**
     * @return bool
     */
    private function studentIsLogged()
    {
        return
            ! is_null($this->student) &&
            ! is_null($this->student->id)
        ;
    }

    /**
     * @return bool
     */
    private function voterIsLogged()
    {
        return ($this->isVoting && $this->studentIsLogged());
    }

    private function updateSession($loggedUser)
    {
        session()->put(self::SESSION_VAR_NAME, $loggedUser);
    }

    public function logged()
    {
        return $this->userIsLogged() && ($this->studentIsLogged() || $this->voterIsLogged());
    }

    public function all()
    {
        return collect($this->loadSessionVar());
    }

    public function toArray()
    {
        return $this->convertInnerJsonsToArray($this->all()->toArray());
    }

    public function toJson()
    {
        return collect($this->toArray())->toJson();
    }

    /**
     * @return bool
     */
    private function userIsLogged()
    {
        return ($this->get('user') || $this->get('socialUser'));
    }
}
