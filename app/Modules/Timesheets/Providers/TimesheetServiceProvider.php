<?php

namespace App\Modules\Timesheets\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

class TimesheetServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        $this->loadViewsFrom(__DIR__ . '/../views' ,'timesheet');    

    }

    public function register()
    {
        // Register services here
    }
}
