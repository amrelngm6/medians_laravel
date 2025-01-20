<?php

namespace App\Modules\Announcements\Services;

use App\Modules\Announcements\Models\Announcement;
use App\Modules\Core\Models\Status;
use App\Models\Auth;

class AnnouncementService
{

    public function find($id)
    {
    }

    
    public function query($request, $modelId = null, $modelType = null)
    {
        $query = Announcement::query();

        if (!empty($modelType) && !empty($modelId)) {
            $query->where("model_id", $modelId)->where('model_type', $modelType);
        }
        
        if (!empty($request->status_id))
        {
            $query->where('status_id', $request->status_id);
        }
        
        if ($request->has('client_id')) {
            $query->where('client_id', $request->client_id);
        }

        if ($request->has('staff_id')) {
            $query->whereHas('team', function($q) use ($request){
                return $q->where('user_id', $request->staff_id)->where('user_type', Staff::class);
            });
        }

        if ($request->has('date') ) {
            $date = explode(' - ', $request->date);
            $query->whereDate('created_at', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('created_at', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $query->with('user','model')->paginate(100);
    }


    public function createAnnouncement(array $data)
    {
        return Announcement::create($data);
    }

    public function updateAnnouncement($id, array $data)
    {
        // Business logic for updating a Announcement
    }

    public function deleteAnnouncement($id)
    {
        return Announcement::findOrFail($id)->delete();
    }

    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Announcement::class)->orderBy('sort', 'ASC')->get();
    }

}
