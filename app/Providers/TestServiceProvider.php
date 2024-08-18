<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
       app()->bind('test_service', function ($app) {
        return 'This is my first service';
       });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
