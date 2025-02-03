<?php

namespace App\Modules\Deals\Services;

use App\Modules\Deals\Models\Deal;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Models\ModelMember;
use App\Modules\Leads\Models\Lead;
use App\Models\Auth;

class DealService
{
    public $model;
    
    public function __construct(Deal $model)
    {
        $this->model = $model;
    }

    public function query()
    {
        $user = Auth::user();

        return Deal::default([$user->business_id ?? 0 , 0])->get();
    }

    public function find(int $id)
    {
        return Deal::findOrFail($id);
    }

    public function getLead(int $id)
    {
        return Lead::findOrFail($id);
    }

    public function createDeal(array $data)
    {
        $deal = Deal::firstOrCreate($data);
        
        if ($deal  && isset($data['location_info']))
        {
            $saveLocation = $this->storeLocationInfo($deal, $data['location_info']);
        }
        
        if ($deal  && isset($data['staff_id']))
        {
            $saveStaff = $this->storeStaffAssignee($deal, $data['staff_id']);
        }

        return $deal;   
    }



    public function updateDeal($id, array $data)
    {
        $deal = $this->find($id);
        $update = $deal->update($data);
        
        if ($deal  && isset($data['location_info']))
        {
            $saveLocation = $this->storeLocationInfo($deal, $data['location_info']);
        }

        if ($deal  && isset($data['staff_id']))
        {
            $saveStaff = $this->storeStaffAssignee($deal, $data['staff_id']);
        }

        return $deal;
    }
    
    public function deleteDeal($id)
    {
        $deal = $this->find($id);
        return $deal->delete();
    }
    

    
    
    public function storeStaffAssignee(Deal $Deal, $staff_id)
    {

        $data = [];
        $data['user_id'] = $staff_id;
        $data['user_type'] = Staff::class;
        $data['model_id'] = $Deal->id;
        $data['model_type'] = get_class($Deal);
        $data['created_by'] = Auth::user()->id() ?? 0;
        $team = ModelMember::firstOrCreate($data);
        
        return $team;   
    }

    
    public function storeLocationInfo(Deal $Deal, $data)
    {
        // Append Model as Morph
        $modelData = [];
        $modelData['model_type'] = get_class($Deal);
        $modelData['model_id'] = $Deal->id;

        $locationInfo = LocationInfo::firstOrCreate($modelData);

        return $locationInfo->update($data);
    }

}
