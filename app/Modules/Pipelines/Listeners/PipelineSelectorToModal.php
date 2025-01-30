<?php

namespace App\Modules\Pipelines\Listeners;

use App\Modules\Pipelines\Models\Pipeline;
use App\Models\Auth;

class PipelineSelectorToModal
{
    public function handle($event)
    {
        $user = Auth::user();
        $pipeline = Pipeline::default([$user->business_id ?? 0, 0])->find($event->model->pipeline_id ?? 0);
        $model = $event->model ?? null;
        $event->context['components'][] = view('pipeline::pipeline-info', compact( 'pipeline', 'model'))->render();
        return $event;
    }
}
