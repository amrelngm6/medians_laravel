<?php

namespace App\Modules\Announcements\Services;

use App\Modules\Announcements\Models\Announcement;

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
}
