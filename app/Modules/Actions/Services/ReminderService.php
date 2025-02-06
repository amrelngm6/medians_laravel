<?php

namespace App\Modules\Actions\Services;

use App\Modules\Actions\Models\Reminder;
use App\Modules\Uploads\Services\UploadService;
use App\Models\Auth;

class ReminderService
{

    public $model;

    public function __construct(Reminder $model)
    {
        $this->model = $model;
    }

    public function query($request)
    {
        $user = Auth::user();
        return $this->model->forBusiness($user->business_id ?? null)->orderBy('id', 'DESC')->get();
    }

    public function queryByModel($request, $modelId, $modelType)
    {
        $user = Auth::user();
        return $this->model->where(['model_id'=>$modelId, 'model_type'=>$modelType])->forBusiness($user->business_id ?? null)->orderBy('id', 'DESC')->get();
    }

    public function createReminder(array $data, $file = null)
    {
        $reminder = Reminder::create($data);

        if ($file  != null) {
            $uploadService = new UploadService();
            $data ['model_id'] =  $reminder->id;
            $data ['model_type'] = get_class($reminder);
            $upload = $uploadService->createUpload($file, $data);
        }
            
        return $reminder;
    }

    public function updateReminder($id, array $data)
    {
        // Business logic for updating a Reminder
        return Reminder::find($id)->update($data);
    }

    public function deleteReminder($id)
    {
        // Business logic for deleting a Reminder
        return Reminder::find($id)->delete();
    }
}
