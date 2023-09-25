<?php

namespace App\Providers;

use Hash;
use Illuminate\Support\ServiceProvider;
use Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('passcheck', function ($attribute, $value, $parameters) {
            return Hash::check($value, $parameters[0]);
        });

        require base_path() . '/app/Helpers/frontend.php';
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
