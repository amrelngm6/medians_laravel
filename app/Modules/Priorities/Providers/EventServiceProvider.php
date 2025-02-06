<?php

namespace App\Modules\Priorities\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Todos\Events\TodoFormRendering;
use App\Modules\Tickets\Events\TicketFormRendering;
use App\Modules\Tickets\Events\TicketModalRendering;
use App\Modules\Priorities\Listeners\PrioritySelectorToForm;
use App\Modules\Priorities\Listeners\PrioritySelectorToModal;
use App\Modules\Actions\Listeners\ReminderToModal;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TaskFormRendering::class => [
            PrioritySelectorToForm::class,
        ],
        TodoFormRendering::class => [
            PrioritySelectorToForm::class,
        ],
        TicketFormRendering::class => [
            PrioritySelectorToForm::class,
        ],




        TaskModalRendering::class => [
            PrioritySelectorToModal::class,
        ],

        TicketModalRendering::class => [
            ReminderToModal::class,
        ],
    ];
}
