<?php

namespace App\Modules\Core\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Modules\Todos\Events\TodoFormRendering;
use App\Modules\Tasks\Events\TaskFormRendering;
use App\Modules\Tasks\Events\TaskModalRendering;
use App\Modules\Core\Listeners\AddStatusSelectorToForm;
use App\Modules\Core\Listeners\StatusSelectorToModal;
use App\Modules\Core\Listeners\StatusSelectorToTicket;


use App\Modules\Tickets\Events\TicketFormRendering;
use App\Modules\Tickets\Events\TicketModalRendering;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        TaskFormRendering::class => [
            AddStatusSelectorToForm::class,
        ],
        TaskModalRendering::class => [
            StatusSelectorToModal::class,
        ],

        TicketFormRendering::class => [
            AddStatusSelectorToForm::class,
        ],
        
        TicketModalRendering::class => [
            StatusSelectorToTicket::class,
        ]
        
    ];
}
