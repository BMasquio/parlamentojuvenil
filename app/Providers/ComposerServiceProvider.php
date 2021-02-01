<?php

namespace App\Providers;

use View;
use Auth;
use Config;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with('html_lang', 'pt-br' /*Language::getLocale()*/);

            $view->with('html_attributes', '');

            $view->with('html_title', Config::get('app.name'));

            $view->with(
                'html_keywords',
                'parlamento juvenil,leis,parlamento,jovens,legislacao'
            );

            $view->with('html_meta_tags', [
                '<!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->',
            ]);

            $view->with('html_description', '');

            $view->with('html_author', 'ALERJ [https://www.alerj.rj.gov.br]');

            $view->with(
                'html_viewport',
                'width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'
            );

            $view->with('html_body_attributes', []);

            $view->with('html_body_show_main_header', true);
        });

        View::composer('*', function ($view) {
            $view->with('site_name', strtoupper(Config::get('app.name')));

            $view->with('app_name_caps', Config::get('app.name'));

            $view->with('current_user', Auth::user());

            $view->with('assets', asset('assets'));

            $view->with('assets_bower', asset('assets/vendor/bower'));

            $view->with('assets_main', asset('assets/layouts/main'));

            $view->with('assets_layout', asset('assets/layouts/smartadmin/'));

            $view->with('language_locale', 'pt_BR' /*Language::getLocale()*/);

            $view->with(
                'language_country_code',
                'BR' /*Language::getCountryCode()*/
            );

            $view->with(
                'language_country_name',
                'Brazil' /*Language::getCountryName()*/
            );

            $view->with(
                'language_name',
                'Portuguese' /*Language::getLanguageName()*/
            );
        });

        /**
         * Create an $icon_name view shared variable for each icon in the system
         */
        View::composer('*', function ($view) {
            if (!($icons = Config::get('icons'))) {
                throw new \Exception('Please create the file config/icons.php');
            }

            foreach ($icons as $key => $icon) {
                $view->with("icon_{$key}", $icon);
            }
        });

        View::composer('*', function ($view) {
            $view->with('isAdmin', false);

            $view->with('loggedUser', loggedUser());

            $view->with('loggedUserJson', loggedUser()->toJson());
        });

        //		/**
        //		 * Calendar
        //		 */
        //		View::composer('*', function($view)
        //		{
        //			$user = Auth::user();
        //
        //			$view->with("default_events_url", $user ? route('events.user', $user->id) : '/');
        //		});
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
