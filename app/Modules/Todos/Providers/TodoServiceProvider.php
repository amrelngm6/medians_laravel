<?php

namespace App\Modules\Todos\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class TodoServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'todo');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
