<?php

use Carbon\Carbon;
use Auth as IlluminateAuth;
use App\Services\SocialLogin\LoggedUser;

function calculate_age($date)
{
    try {
        $result = Carbon::createFromFormat('d/m/Y', $date)->diffInYears();
    } catch (\Exception $exception) {
        try {
            $result = Carbon::createFromFormat('dmY', $date)->diffInYears();
        } catch (\Exception $exception) {
            $result = 'nascimento: ' . $date;
        }
    }

    return $result;
}

function youtube_embed($you)
{
    return preg_replace(
        '/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i',
        '//www.youtube.com/embed/$1',
        $you
    );
}

function make_image_url($url, $width = 350)
{
    //	return "http://api.antoniocarlosribeiro.com/api/v1/image?url={$url}&width={$width}";

    return $url;
}

/**
 * Clean string,
 * minimize and remove space, accent and other
 *
 * @param string $string
 * @return string
 */
function mb_strtoclean($string)
{
    // Valeur a nettoyer (conversion)
    $unwanted_array = [
        'Š' => 'S',
        'š' => 's',
        'Ž' => 'Z',
        'ž' => 'z',
        'À' => 'A',
        'Á' => 'A',
        'Â' => 'A',
        'Ã' => 'A',
        'Ä' => 'A',
        'Å' => 'A',
        'Æ' => 'A',
        'Ç' => 'C',
        'È' => 'E',
        'É' => 'E',
        'Ê' => 'E',
        'Ë' => 'E',
        'Ì' => 'I',
        'Í' => 'I',
        'Î' => 'I',
        'Ï' => 'I',
        'Ñ' => 'N',
        'Ò' => 'O',
        'Ó' => 'O',
        'Ô' => 'O',
        'Õ' => 'O',
        'Ö' => 'O',
        'Ø' => 'O',
        'Ù' => 'U',
        'Ú' => 'U',
        'Û' => 'U',
        'Ü' => 'U',
        'Ý' => 'Y',
        'Þ' => 'B',
        'ß' => 'Ss',
        'à' => 'a',
        'á' => 'a',
        'â' => 'a',
        'ã' => 'a',
        'ä' => 'a',
        'å' => 'a',
        'æ' => 'a',
        'ç' => 'c',
        'è' => 'e',
        'é' => 'e',
        'ê' => 'e',
        'ë' => 'e',
        'ì' => 'i',
        'í' => 'i',
        'î' => 'i',
        'ï' => 'i',
        'ð' => 'o',
        'ñ' => 'n',
        'ò' => 'o',
        'ó' => 'o',
        'ô' => 'o',
        'õ' => 'o',
        'ö' => 'o',
        'ø' => 'o',
        'ù' => 'u',
        'ú' => 'u',
        'û' => 'u',
        'ý' => 'y',
        'ý' => 'y',
        'þ' => 'b',
        'ÿ' => 'y',
    ];

    return mb_strtolower(strtr($string, $unwanted_array));
}

/**
 * Get the current logged user object.
 *
 * @return LoggedUser
 */
function loggedUser()
{
    return app(LoggedUser::class);
}

function makeAvatar($email)
{
    return 'https://www.gravatar.com/avatar/' . md5($email);
}

function string_to_date($date)
{
    $formats = [
        'd-m-y',
        'd/m/y',
        'd m y',
        'd/m/Y',
        'd-m-Y',
        'd m Y',

        'm/d/y',
        'm-d-y',
        'm d y',
        'm/d/Y',
        'm-d-Y',
        'm d Y',

        'Y/m/d',
        'Y-m-d',
        'Y m d',
    ];

    foreach ($formats as $format) {
        try {
            return Carbon::createFromFormat($format, $date);
        } catch (\Exception $exception) {
            // do nothing here
        }
    }

    return null;
}

function get_current_year($year = null)
{
    return $year ?: config('app.year', date('Y'));
}

function make_view_name_year_based($name, $year = null)
{
    return get_current_year($year) . '.' . $name;
}

function fix_cities()
{
    app(\App\Data\Repositories\Cities::class)->fixCities();
}

function random_color($scope = 'default', array $except = [])
{
    return \App\Data\Models\Color::random($scope, $except)['name'];
}

function logout()
{
    session()->forget('loggedUser');

    if (IlluminateAuth::user()) {
        IlluminateAuth::logout();
    }
}

function election_enabled()
{
    return config('app.election.enabled') &&
        now_in_date_range(
            config('app.election.start'),
            config('app.election.end')
        );
}

function flag_contest_subscription_enabled()
{
    return now_in_date_range(
        config('app.flag.contest.subscriptions.start'),
        config('app.flag.contest.subscriptions.end')
    );
}

function flag_contest_election_enabled()
{
    return now_in_date_range(
        config('app.flag.contest.election.start'),
        config('app.flag.contest.election.end')
    );
}

function training_enabled()
{
    return now_in_date_range(
        config('app.training.start'),
        config('app.training.end')
    );
}

function billing_enabled()
{
    return now_in_date_range(
        config('app.billing.start'),
        config('app.billing.end')
    );
}

function subscriptions_enabled()
{
    return config('app.subscriptions.enabled') === true &&
        now_in_date_range(
            config('app.subscriptions.start'),
            config('app.subscriptions.end')
        );
}

function log_exception($e)
{
    \Log::error(
        'Exception ' .
            class_basename($e) .
            ' with ' .
            (($user = \Auth::user())
                ? "{$user->name}({$user->email})"
                : 'guest')
    );
}

function now_in_date_range($start, $end)
{
    $now = Carbon::now();

    $start = Carbon::parse($start . ' 00:00:00');

    $end = Carbon::parse($end . ' 23:59:59');

    return $now->gte($start) && $now->lte($end);
}

function legislative_process_enabled()
{
    return true;
}

if (!function_exists('array_only')) {
    /**
     * Get a subset of the items from the given array.
     *
     * @param  array  $array
     * @param  array|string  $keys
     * @return array
     */
    function array_only($array, $keys)
    {
        return Arr::only($array, $keys);
    }
}
