<?php

namespace App\Modules\CustomFields\Services;

use App\Modules\CustomFields\Models\CustomField;
use App\Models\Auth;

class CustomFieldService
{
    
    public function find($id)
    {
        return CustomField::forBusiness(Auth::user()->business_id ?? 0)->findOrFail($id);
    }

    public function query()
    {
        // CustomField logic for creating a CustomField
        return CustomField::forBusiness(Auth::user()->business_id ?? 0)->get();
    }

    public function createCustomField(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;

        return CustomField::firstOrCreate($data);
    }

    public function updateCustomField($id, array $data)
    {
        $field = $this->find($id);

        return $field->update($data);
    }

    public function deleteCustomField($id)
    {
        // Business logic for deleting a CustomField
    }


    public function types()
    {
        return [
            ['name'=> 'Text', 'code'=> 'text'],
            ['name'=> 'Number', 'code'=> 'number'],
            ['name'=> 'Textarea', 'code'=> 'textarea'],
            ['name'=> 'Date', 'code'=> 'date'],
            ['name'=> 'Time', 'code'=> 'time'],
            ['name'=> 'Email', 'code'=> 'email'],
            ['name'=> 'Checkbox', 'code'=> 'checkbox'],
            ['name'=> 'Select', 'code'=> 'select'],
            ['name'=> 'Multi Select', 'code'=> 'multiselect'],
            ['name'=> 'Radio', 'code'=> 'radio'],
            ['name'=> 'Color', 'code'=> 'color'],
            ['name'=> 'Hidden', 'code'=> 'hidden'],

        ];
    }
}
