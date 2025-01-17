<?php

namespace App\Modules\Templates\Services;

use App\Modules\Templates\Models\Template;
use App\Models\Module;
use App\Models\Auth;

class TemplateService
{
    public function query()
    {
        $user = Auth::user(); 
        return Template::forBusiness($user->business_id ?? 0)->get();
    }

    public function find(int $id)
    {
        return Template::findOrFail($id);
    }

    public function createTemplate(array $data)
    {
        return Template::create($data);
    }

    public function updateTemplate($id, array $data)
    {
        $item = $this->find($id);
        $item->update($data);
        return $item;
    }

    public function deleteTemplate($id)
    {
        $item = $this->find($id);
        return $item->delete();
    }
    public function modules()
    {
        return Module::getActive();
    }
}
