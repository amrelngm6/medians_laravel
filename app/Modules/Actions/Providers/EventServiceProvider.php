<?php

namespace App\Modules\Actions\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Tickets\Events\TicketModalRendering;
use App\Modules\Actions\Listeners\ReminderToModal;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TicketModalRendering::class => [
            ReminderToModal::class,
        ],
        TicketModalRendering::class => [
            ReminderToModal::class,
        ],
    ];
}
