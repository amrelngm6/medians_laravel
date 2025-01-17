<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\RoleLoader;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;




class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->loadModuleProviders();

        $this->app->bind(MessageRepositoryInterface::class, EloquentMessageRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (config('app.debug')) {
            DB::listen(function ($query) {
                \Log::info("Query Executed: {$query->sql}, Bindings: " . json_encode($query->bindings));
            });
        }
        
        $roleLoader = app(RoleLoader::class);
        $roleLoader->loadRolesFromModules();

    }

    /**
     * Bootstrap any application services.
     */
    public function loadModuleProviders(): void
    {
        if (Schema::hasTable('mytable')  )
        {
            $modules = DB::table('modules')
                ->where('is_enabled', true)
                ->pluck('provider');
                
            foreach ($modules as $providerClass) {
                if (class_exists($providerClass)) {
                    $this->app->register($providerClass);
                }
            }
        }
        
    }
}
