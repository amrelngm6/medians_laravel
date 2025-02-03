<?php

namespace App\Modules\Deals\Events;

use Illuminate\Queue\SerializesModels;

class OverviewWidget
{
    use SerializesModels;

    public $context;

    public $model;

    public function __construct(array $context = [], $model = null)
    {
        $this->context = $context;

        $this->model = $model;
    }
}
