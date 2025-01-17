<?php

namespace App\Modules\Milestones\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Events\TaskSaved;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Milestones\Listeners\MilestoneSelectorToForm;
use App\Modules\Milestones\Listeners\MilestoneSelectorToModal;
use App\Modules\Milestones\Listeners\MilestoneTaskStored;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TaskFormRendering::class => [
            MilestoneSelectorToForm::class,
        ],

        
        TaskSaved::class => [
            MilestoneTaskStored::class,
        ],

    ];
}
