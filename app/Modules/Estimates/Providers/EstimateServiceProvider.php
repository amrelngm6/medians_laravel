<?php

namespace App\Modules\Estimates\Providers;

use Illuminate\Support\ServiceProvider;
use App\Modules\Estimates\Services\EstimateService;

class EstimateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'estimate');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }

    public function register()
    {
        $this->app->singleton(EstimateService::class, function ($app) {
            return new EstimateService();
        });
    }
}
