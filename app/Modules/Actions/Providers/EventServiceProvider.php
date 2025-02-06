<?php

namespace App\Modules\Actions\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Tickets\Events\TicketModalRendering;
use App\Modules\Actions\Listeners\ReminderModalListener;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TaskModalRendering::class => [
            ReminderModalListener::class,
        ],
        TicketModalRendering::class => [
            ReminderModalListener::class,
        ],
    ];
}
