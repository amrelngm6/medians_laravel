<?php

namespace App\Modules\Actions\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Module;

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
    }

    public function register()
    {
        // Register services here
    }
}
