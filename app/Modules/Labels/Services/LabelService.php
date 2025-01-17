<?php

namespace App\Modules\Labels\Services;

use App\Modules\Labels\Models\Label;

class LabelService
{

    public function find($id)
    {
        
    }

    public function query($id, $class)
    {
        $Leads = Label::query();

        return $Leads->where("model_id", $id)->where('model_type', $class)->with('user', 'model')->paginate(100);
    }

    public function createLabel(array $data)
    {
        return Label::create($data);
    }

    public function updateLabel($id, array $data)
    {
        // Business logic for updating a Label
    }

    public function deleteLabel($id)
    {
        return Label::findOrFail($id)->delete();
    }
}
