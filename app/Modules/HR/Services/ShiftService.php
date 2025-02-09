<?php

namespace App\Modules\HR\Services;

use App\Modules\Core\Models\ModelField;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\HR\Models\Shift;

use App\Models\Auth;

class ShiftService
{

    public $model;

    public function __construct(Shift $model)    
    {
        $this->model = $model;
    }

    

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $shift = Shift::forBusiness($business_id);

        return $shift->with('user')->get();
    }

    public function find($id)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $shift = Shift::forBusiness($business_id);

        return $shift->findOrFail($id);
    }


    
    public function createShift(array $data)
    {
        return Shift::create($data);
    }
    

    public function updateShift($id, array $data)
    {
        $shift = Shift::findOrFail($id);
        return $shift->update($data);
    }


    public function deleteShift($id)
    {
        $shift = Shift::findOrFail($id);
        return $shift->delete();
    }


}
