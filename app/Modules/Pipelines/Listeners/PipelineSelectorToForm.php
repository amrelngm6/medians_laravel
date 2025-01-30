<?php

namespace App\Modules\Pipelines\Listeners;

use App\Modules\Pipelines\Models\Pipeline;
use App\Models\Auth;

class PipelineSelectorToForm
{
    public function handle($event)
    {
        $user = Auth::user();
        $pipelines = Pipeline::default([$user->business_id ?? 0, 0])->where('model', $event->model ? get_class($event->model) : null)->get();
        $model = $event->model ?? null;
        $event->context['components']['pipeline'] = view('pipeline::pipeline-selector', compact('pipelines', 'model'))->render();
        return $event;
    }
}
