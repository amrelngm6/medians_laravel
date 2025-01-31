<?php

namespace App\Modules\Deals\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Http\Request;

class DealPage
{
    use Dispatchable, SerializesModels;

    public $context;

    public $request;

    public function __construct(Request $request, $model, $context )
    {
        $this->request = $request;
        $this->model = $model;
        $this->context = $context;
    }
}
