<?php

namespace App\Modules\Pipelines\Services;

use App\Modules\Pipelines\Models\Pipeline;
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

    public function createPipeline(array $data)
    {
        return Pipeline::create($data);
    }

    public function updatePipeline($id, array $data)
    {
        $pipeline = $this->find($id);
        $pipeline->update($data);
        return $pipeline;
    }

    public function deletePipeline($id)
    {
        $pipeline = $this->find($id);
        return $pipeline->delete();
    }
}
