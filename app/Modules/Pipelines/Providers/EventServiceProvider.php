<?php

namespace App\Modules\Pipelines\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Deals\Events\DealSaved;
use App\Modules\Deals\Events\DealPage;
use App\Modules\Pipelines\Listeners\SetModelStage;
use App\Modules\Pipelines\Listeners\ShowPipeline;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        DealSaved::class => [
            SetModelStage::class,
        ],
        
        DealPage::class => [
            ShowPipeline::class,
        ],
    ];
}
