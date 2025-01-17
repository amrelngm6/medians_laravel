<?php

namespace App\Modules\Uploads\Providers;

use Illuminate\Support\ServiceProvider;

class UploadServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'uploads');
    }

    public function register()
    {
        // Register services here
    }
}
