<?php

namespace App\Modules\Announcements\Providers;

use Illuminate\Support\ServiceProvider;

class AnnouncementServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views    
        $this->loadViewsFrom(__DIR__ . '/../views', 'announcements');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
