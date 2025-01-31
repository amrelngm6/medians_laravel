<?php

namespace App\Modules\Deals\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;

class DealSaved
{
    use Dispatchable, SerializesModels;

    public $context;

    public $request;

    public function __construct(Request $request, $context)
    {
        $this->context = $context;
        $this->request = $request;
    }
}
