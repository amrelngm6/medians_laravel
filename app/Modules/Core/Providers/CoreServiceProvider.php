<?php

namespace App\Modules\Core\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\Models\Module;
use App\Models\Auth;
use App\Modules\Core\Components\StatusSelector;
use App\Modules\Core\Models\Status;

class CoreServiceProvider extends ServiceProvider
{

    public function boot()
    {
        
        $Module = Module::firstOrCreate([
            'name' => 'Role',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);

        $Module = Module::firstOrCreate([
            'name' => 'Business',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);

        $Module = Module::firstOrCreate([
            'name' => 'StatusList',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);

        $Module = Module::firstOrCreate([
            'name' => 'Category',
            'path' => dirname(__NAMESPACE__),
            'provider' => $this::class,
        ]);

        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/route.php');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');


        // Fetch all settings
        $status = function($id, $model) {
            return Status::default([Auth::user()->business_id ?? 0, 0])->where('model', $model)->where('name', 'LIKE',  '%'. $id .'%',)->first()->status_id ?? null;
        };

        // Share settings with all views
        View::share('status', $status);

        View::share('session_user', Auth::user());

        // Blade::component('status-selector', StatusSelector::class);

    }

    public function register()
    {
        // Register services here
        $this->app->register(EventServiceProvider::class);
    }
}
