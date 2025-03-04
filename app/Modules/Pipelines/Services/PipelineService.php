<?php

namespace App\Modules\Pipelines\Services;

use App\Modules\Pipelines\Models\Pipeline;
use App\Modules\Pipelines\Models\PipelineStage;
use App\Modules\Pipelines\Models\PipelineSelected;
use App\Models\Auth;

class PipelineService
{
    public function query()
    {
        $user = Auth::user();

        return Pipeline::with('stages')->withCount('stages')->default([$user->business_id ?? 0 , 0])->get();
    }

    public function find(int $id)
    {
        return Pipeline::with('stages')->withCount('stages')->find($id);
    }

    public function findStage(int $id)
    {
        return PipelineStage::findOrFail($id);
    }

    public function findSelected(int $id)
    {
        return PipelineSelected::findOrFail($id);
    }

    public function findByModel($model)
    {
        return PipelineSelected::where('model_id', $model->{$model->getKeyName()})
        ->where('model_type', get_class($model))
        ->with(['pipeline'=>function($q){
            $q->with('stages');
        }])
        ->first();
    }

    public function createPipeline(array $data)
    {
        return Pipeline::create($data);
    }

    public function createStage(array $data)
    {
        return PipelineStage::create($data);
    }

    public function updatePipeline($id, array $data)
    {
        $pipeline = $this->find($id);
        $pipeline->update($data);
        return $pipeline;
    }

    public function updateStage($id, array $data)
    {
        $stage = $this->findStage($id);
        $stage->update($data);
        return $stage;
    }

    public function updateSelectedPipeline(array $data)
    {
        $stage = PipelineSelected::where([
            'model_type' => $data['model_type'],
            'model_id' => $data['model_id']
        ])->first();
        
        if ($stage)
            $stage->update($data);


        if (!$stage) {
            $data['pipeline_stage_id'] = $data['pipeline_stage_id'] ?? 0;
            $stage = PipelineSelected::create($data);
        }
        

        return $stage;
    }

    public function deletePipeline($id)
    {
        $pipeline = $this->find($id);
        return $pipeline->delete();
    }

    public function deleteStage($id)
    {
        $stage = $this->findStage($id);
        return $stage->delete();
    }



    
}
