<?php

namespace App\Modules\Projects\Events;

use Illuminate\Queue\SerializesModels;

class ProjectOverviewWidget
{
    use SerializesModels;

    public $context;

    public $model;

    public function __construct(array $context = [], $project = null)
    {
        $this->context = $context;

        $this->model = $project;
    }
}
