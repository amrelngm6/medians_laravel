<?php

namespace App\Modules\Timesheets\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Todos\Events\TodoFormRendering;
use App\Modules\Tickets\Events\TicketFormRendering;
use App\Modules\Tickets\Events\TicketModalRendering;
use App\Modules\Timesheets\Listeners\TimesheetSelectorToModal;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [

        TaskModalRendering::class => [
            TimesheetSelectorToModal::class,
        ],
    ];
}
