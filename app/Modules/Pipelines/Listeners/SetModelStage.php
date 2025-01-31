<?php

namespace App\Modules\Pipelines\Listeners;

use App\Modules\Pipelines\Models\PipelineSelected;
use Illuminate\Http\Request;
use App\Models\Auth;

class SetModelStage
{
    public function handle($event)
    {
        $request = $event->request;

        $user = Auth::user();
       
        $pipeline = PipelineSelected::firstOrCreate([
            "model_id" => $event->context->id ?? 0, 
            "model_type" => get_class($event->context),
            'pipeline_id' => $request->pipeline_id, 
            'pipeline_stage_id' => $request->pipeline_stage_id, 
            "created_by"=> $user->id(),
            "business_id"=> $event->context->business_id ?? 0, 
        ]);

        return $pipeline;
    }
}
