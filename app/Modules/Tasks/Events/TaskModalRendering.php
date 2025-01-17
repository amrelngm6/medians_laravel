<?php

namespace App\Modules\Tasks\Events;

use Illuminate\Queue\SerializesModels;

use App\Modules\Tasks\Services\TaskService;


class TaskModalRendering
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
