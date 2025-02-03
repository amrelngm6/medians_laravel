<?php

namespace App\Modules\Pipelines\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;
use App\Modules\Pipelines\Models\Pipeline;
use App\Modules\Pipelines\Models\PipelineStage;
use App\Modules\Pipelines\Models\PipelineSelected;
use App\Observers\ActivityObserver;

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

        Pipeline::observe(ActivityObserver::class);
        PipelineSelected::observe(ActivityObserver::class);
        PipelineStage::observe(ActivityObserver::class);
    }

    public function register()
    {
        // Register services here
        $this->app->register(EventServiceProvider::class);
    }
}
