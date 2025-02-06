<?php

namespace App\Modules\Emails\Events;

use Illuminate\Queue\SerializesModels;


class EmailFormRendering
{
    use SerializesModels;

    public $context;

    public $task;

    public function __construct(array $context = [], $task = null)
    {
        $this->context = $context;

        $this->model = $task;
    }
}
