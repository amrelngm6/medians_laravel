<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Auth;

class ActivityObserver
{
    public function created(Model $model)
    {
        $converted = ucfirst(str_replace('_', ' ', Str::snake(class_basename($model))));

        activity()
            ->event('created')
            ->performedOn($model)
            ->causedBy(Auth::user())
            ->withProperties(['attributes' => $model->getAttributes()])
            ->log("Created ". $converted);
    }

    public function updated(Model $model)
    {
        $converted = ucfirst(str_replace('_', ' ', Str::snake(class_basename($model))));

        activity()
            ->event('updated')
            ->performedOn($model)
            ->causedBy(Auth::user())
            ->withProperties([
                'attributes' => $model->getChanges(),
                'old' => $model->getOriginal()
            ])
            ->log("Updated: " . $converted);
    }

    public function deleted(Model $model)
    {
        $converted = ucfirst(str_replace('_', ' ', Str::snake(class_basename($model))));

        activity()
            ->event('deleted')
            ->performedOn($model)
            ->causedBy(Auth::user())
            ->withProperties(['attributes' => $model->getOriginal()])
            ->log("Deleted: " . $converted.": ". ($model->name ?? ""));
    }
}
