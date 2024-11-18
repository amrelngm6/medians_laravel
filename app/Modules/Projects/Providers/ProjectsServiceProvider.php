<?php

namespace App\Modules\Projects\Providers;

use Illuminate\Support\ServiceProvider;

class ProjectsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        \Blade::component('project-tabs',  \App\Modules\Finance\Components\ProjectExpensesTabComponent::class );

    }

    public function register()
    {
        // Register services here
    }
}
