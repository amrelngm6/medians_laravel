<?php

namespace App\Modules\Tasks\Events;

use Illuminate\Queue\SerializesModels;

use App\Modules\Tasks\Services\TaskService;


class TaskModalRendering
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
