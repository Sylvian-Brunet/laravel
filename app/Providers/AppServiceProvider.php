<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::if('ifSylvian', function() {
            return \Auth::check() && \Auth::user()->name == 'Sylvian';
        });

        Blade::if('hasRole', function($role) {
            return \Auth::check() && \Auth::user()->role == $role;
        });

        /*
        $pro_users_count = Cache::remember('pro_users_count', 60*60, function() {
           return \App\User::where('role',2)->count();
        });
        */
    }
}
