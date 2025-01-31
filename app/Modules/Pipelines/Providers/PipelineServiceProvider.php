<?php

namespace App\Modules\Pipelines\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class PipelineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'pipeline');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        // Register services here
    }
}
