<?php

namespace Dpc\SansModelAuth;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class SansModelAuthServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Auth::extend('sans-model', function($app) {
            return new SansModelGuard($app->make('config'), $app->make('hash'), $app->make(AuthServiceContract::class));
        });

        Auth::provider('sans-model', function($app) {
            return new SansModelUserProvider();
        });

    }

}