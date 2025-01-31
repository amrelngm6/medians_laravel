<?php

namespace App\Modules\Pipelines\Listeners;

use App\Modules\Pipelines\Services\PipelineService;
use Illuminate\Http\Request;
use App\Models\Auth;

class ShowPipeline
{
    public function handle($event)
    {
        $user = Auth::user();
        $PipelineService = new PipelineService();
        $selectedStage = $PipelineService->findByModel($event->model);

        $event->context['components']['priority'] =  view('pipeline::stages-row', [
            'selectedStage' => $selectedStage,
            'pipeline' => $selectedStage->pipeline ?? [],
            'model' => $event->model,
        ]);

        return $event;

    }
}
