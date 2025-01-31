<?php

namespace App\Modules\Pipelines\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Deals\Events\DealSaved;
use App\Modules\Pipelines\Listeners\SetModelStage;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        DealSaved::class => [
            SetModelStage::class,
        ],
    ];
}
