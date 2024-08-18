<?php

namespace App\Providers;

use App\Services\NotificationService;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

class NotifactionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(NotificationService::class, function($app){
            return new NotificationService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // Facade::class_alias(NotificationService::class, 'Notification');
        $this->app->alias(NotificationService::class, 'Notification');
    }
}
