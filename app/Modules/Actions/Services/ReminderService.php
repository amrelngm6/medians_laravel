<?php

namespace App\Modules\Actions\Services;

use App\Modules\Actions\Models\Reminder;

class ReminderService
{

    public $model;

    public function __construct(Reminder $model)
    {
        $this->model = $model;
    }

    public function query($request)
    {
        return $this->model->query();
    }

    public function createReminder(array $data)
    {
        // Business logic for creating a Reminder
    }

    public function updateReminder($id, array $data)
    {
        // Business logic for updating a Reminder
    }

    public function deleteReminder($id)
    {
        // Business logic for deleting a Reminder
    }
}
