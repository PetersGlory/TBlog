<?php

namespace TechObserversBlog\Providers;
use View;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $age = Carbon::createFromDate(2002, 8, 14)->age;

        view()->share('myAge', $age);
        view()->share('name', "Peter");
        view()->composer('*', function($view) {
            $view->with('auth', Auth::user());
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
