<?php

namespace App\Modules\Pipelines\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Todos\Events\TodoFormRendering;
use App\Modules\Tickets\Events\TicketFormRendering;
use App\Modules\Tickets\Events\TicketModalRendering;
use App\Modules\Pipelines\Listeners\PipelineSelectorToForm;
use App\Modules\Pipelines\Listeners\PipelineSelectorToModal;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TaskFormRendering::class => [
            PipelineSelectorToForm::class,
        ],
        TodoFormRendering::class => [
            PipelineSelectorToForm::class,
        ],
        TicketFormRendering::class => [
            PipelineSelectorToForm::class,
        ],




        TaskModalRendering::class => [
            PipelineSelectorToModal::class,
        ],
        
        TicketModalRendering::class => [
            PipelineSelectorToModal::class,
        ],
    ];
}
