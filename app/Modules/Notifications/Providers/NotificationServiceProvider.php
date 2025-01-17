<?php

namespace App\Modules\Notifications\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class NotificationsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
