<?php

namespace App\Modules\Tasks\Providers;

use App\Modules\Tasks\Models\Task;
use App\Modules\Tasks\Models\TaskChecklist;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;
use Illuminate\Database\Eloquent\Model;
use App\Observers\ActivityObserver;


class TaskServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views', 'tasks');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        
        Task::observe(ActivityObserver::class);
        TaskChecklist::observe(ActivityObserver::class);

    }

    public function register()
    {
        // Register services here
        $this->app->register(EventServiceProvider::class);
    }
}
