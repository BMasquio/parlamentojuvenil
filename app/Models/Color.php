<?php

namespace App\Models;

class Color
{
    protected static $availableColors = [];

    public function __construct()
    {
        static::$availableColors = static::byYear();
    }

    public static function all()
    {
        return collect([
            2017 => [
                [
                    'name' => 'rouge',
                    'color' => '#A54686',
                ],
                [
                    'name' => 'violet-red',
                    'color' => '#BC1C91',
                ],
                [
                    'name' => 'torch-red',
                    'color' => '#FF141E',
                ],
                [
                    'name' => 'ecstasy-orange',
                    'color' => '#F58220',
                ],
                [
                    'name' => 'supernova-yellow',
                    'color' => '#FFCA00',
                ],
                [
                    'name' => 'turbo-yellow',
                    'color' => '#FFF000',
                ],
                [
                    'name' => 'haze-green',
                    'color' => '#00A648',
                ],
                [
                    'name' => 'lima-green',
                    'color' => '#91CE18',
                ],
                [
                    'name' => 'cerulean-blue',
                    'color' => '#0094DB',
                ],
                [
                    'name' => 'danube-blue',
                    'color' => '#5A8BC9',
                ],
                [
                    'name' => 'endeavour-blue',
                    'color' => '#0060AE',
                ],
                [
                    'name' => 'jacksons-purple',
                    'color' => '#292C95',
                ],
            ],
            2019 => [
                [
                    'name' => 'rouge',
                    'color' => '#A54686',
                ],
                [
                    'name' => 'violet-red',
                    'color' => '#BC1C91',
                ],
                [
                    'name' => 'torch-red',
                    'color' => '#FF141E',
                ],
                [
                    'name' => 'ecstasy-orange',
                    'color' => '#F58220',
                ],
                [
                    'name' => 'supernova-yellow',
                    'color' => '#FFCA00',
                ],
                [
                    'name' => 'turbo-yellow',
                    'color' => '#FFF000',
                ],
                [
                    'name' => 'haze-green',
                    'color' => '#00A648',
                ],
                [
                    'name' => 'lima-green',
                    'color' => '#91CE18',
                ],
                [
                    'name' => 'cerulean-blue',
                    'color' => '#0094DB',
                ],
                [
                    'name' => 'danube-blue',
                    'color' => '#5A8BC9',
                ],
                [
                    'name' => 'endeavour-blue',
                    'color' => '#0060AE',
                ],
                [
                    'name' => 'jacksons-purple',
                    'color' => '#292C95',
                ],
            ],
        ]);
    }

    public static function byYear($year = null)
    {
        return collect(self::all()[$year ?: get_current_year()]);
    }

    protected static function ensureScope($scope)
    {
        if (!isset(static::$availableColors[$scope])) {
            static::$availableColors[$scope] = [];
        }
    }

    protected static function fillAvailableColors(
        $scope = 'default',
        array $except = []
    ) {
        static::ensureScope($scope);

        if (collect(static::$availableColors[$scope])->count() == 0) {
            static::$availableColors[$scope] = collect(
                static::byYear()->shuffle()
            )->reject(function ($color) use ($except) {
                return in_array($color['name'], $except);
            });
        }
    }

    public static function random($scope = 'default', array $except = [])
    {
        static::fillAvailableColors($scope, $except);

        return static::$availableColors[$scope]->pop();
    }
}
