<?php

namespace App\Providers;

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
<<<<<<< HEAD
        //
=======
        view()->composer('layouts.sidebar', function ($view){
          $view->with('archives', \App\Post::archives());
        });
>>>>>>> 2143ba06f1d493ead94ad48002ac6e5daf5a15b6
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
