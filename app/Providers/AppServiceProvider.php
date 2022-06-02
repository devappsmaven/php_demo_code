<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Auth;
use DB;
use Theme;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.admin-header', function($view)
        {
            $view->with('user', Auth::user());
        });

        view()->composer('layouts.admin-main-sidebar', function($view)
        {
            $view->with('user', Auth::user());
        });

        view()->composer('layouts.app', function($view)
        {
            $theme = DB::table('themes')->where('active', '=', 1)->first();
            $view->with('template', $theme->name);
        });

        view()->composer('layouts.app2', function($view)
        {
            $theme = DB::table('themes')->where('active', '=', 1)->first();
            $view->with('template', $theme->name);
        });
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
