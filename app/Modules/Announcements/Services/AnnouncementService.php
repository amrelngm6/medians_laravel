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

    public function query($id, $class)
    {
        $Leads = Announcement::query();

        return $Leads->where("model_id", $id)->where('model_type', $class)->with('user', 'model')->paginate(100);
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
