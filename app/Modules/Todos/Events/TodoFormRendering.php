<?php

namespace App\Modules\Todos\Events;

use Illuminate\Queue\SerializesModels;


class TodoFormRendering
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
