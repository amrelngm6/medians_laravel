<?php

namespace App\Modules\Tickets\Events;

use Illuminate\Queue\SerializesModels;

use App\Modules\Tickets\Services\TicketService;


class TicketFormRendering
{
    use SerializesModels;

    public $context;

    public $ticket;

    public function __construct(array $context = [], $ticket = null)
    {
        $this->context = $context;

        $this->model = $ticket;
    }
}
