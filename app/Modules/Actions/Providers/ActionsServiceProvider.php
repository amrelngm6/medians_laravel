<?php

namespace App\Modules\Actions\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use App\Models\Module;
use App\Modules\Actions\Console\Commands\SendReminders;

class ActionsServiceProvider extends ServiceProvider
{
    public function boot()
    {

        $Module = Module::firstOrCreate([
            'name' => 'Comment',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);
        
        // if (empty($Module->is_enabled)) 
        //     return;

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');

        // Load views
        $this->loadViewsFrom(__DIR__ . '/../views/reminders', 'reminders');

        // Register Commands
        if ($this->app->runningInConsole()) {
            $this->commands([
                SendReminders::class,
            ]);
        }

        // Register Scheduled Tasks
        $this->app->booted(function () {
            $schedule = $this->app->make(Schedule::class);
            $schedule->command('schedule:run')->everyTenSeconds();
            $schedule->command('reminders:send')->everyTenSeconds();
        });

    }

    public function register()
    {
        // Register services here
        $this->app->register(EventServiceProvider::class);
    }
}
