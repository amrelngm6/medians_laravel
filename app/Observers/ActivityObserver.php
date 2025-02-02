<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;

use App\Models\Auth;

class ActivityObserver
{
    public function created(Model $model)
    {
        activity()
            ->event('created')
            ->performedOn($model)
            ->causedBy(Auth::user())
            ->withProperties(['attributes' => $model->getAttributes()])
            ->log("Created: ");
    }

    public function updated(Model $model)
    {
        activity()
            ->event('updated')
            ->performedOn($model)
            ->causedBy(Auth::user())
            ->withProperties([
                'attributes' => $model->getChanges(),
                'old' => $model->getOriginal()
            ])
            ->log("Updated: " . class_basename($model));
    }

    public function deleted(Model $model)
    {
        activity()
            ->event('deleted')
            ->performedOn($model)
            ->causedBy(Auth::user())
            ->withProperties(['attributes' => $model->getOriginal()])
            ->log("Deleted: " . class_basename($model).": ". ($model->name ?? ""));
    }
}
