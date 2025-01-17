<?php

namespace App\Modules\Tasks\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use App\Modules\Tasks\Models\Task;
use Illuminate\Http\Request;

class TaskSaved
{
    use Dispatchable, SerializesModels;

    public $context;

    public $request;

    public function __construct(Request $request, Task $context)
    {
        $this->context = $context;
        $this->request = $request;
    }
}
