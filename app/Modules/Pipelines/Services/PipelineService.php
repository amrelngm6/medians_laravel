<?php

namespace App\Modules\Pipelines\Services;

use App\Modules\Pipelines\Models\Pipeline;
use App\Modules\Pipelines\Models\PipelineStage;
use App\Models\Auth;

class PipelineService
{
    public function query()
    {
        $user = Auth::user();

        return Pipeline::default([$user->business_id ?? 0 , 0])->get();
    }

    public function find(int $id)
    {
        return Pipeline::findOrFail($id);
    }

    public function findStage(int $id)
    {
        return PipelineStage::findOrFail($id);
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
