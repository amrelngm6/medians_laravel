<?php

namespace App\Modules\Announcements\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Announcements\Services\AnnouncementService;
use App\Modules\Leads\Services\LeadService;
use App\Modules\Customers\Services\StaffService;
use App\Modules\Projects\Services\ProjectService;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class AnnouncementController extends Controller
{
    
    protected $announcementService;

    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;
    }


    public function index()
    {
        // List all Announcements
    }

    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            // Handle User who created it
            $user = Auth::user();
            $userData = ['user_id'=>$user->staff_id, 'user_type'=> get_class($user)];
            
            // Handle Dates
            $dates = explode(" - ",  $request->date);
            $datesData['start'] = date("Y-m-d", strtotime($dates[0]));
            $datesData['end'] = date("Y-m-d", strtotime($dates[1]));

            // Create and save the Announcement
            $announcement = $this->announcementService->createAnnouncement( array_merge($datesData, $userData, $request->only('name', 'description', 'model_id', 'model_type', 'user_id', 'user_type')));
            
            return $announcement ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    public function show($id)
    {
        // Display a single Announcement
    }

    public function update($id)
    {
        // Update the specified Announcement
    }

    public function destroy($id)
    {
        try {
            return $this->announcementService->deleteAnnouncement($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }

    
    /**
     * Show the form for updating a Announcement.
     */
    public function lead(Request $request, $id)
    {
        $LeadService = new LeadService;
        
        $lead = $LeadService->find($id);

        $leadTabs = $this->loadModuleTabs('Lead.tabs');

        $announcements = $this->announcementService->query($lead->lead_id, get_class($lead));

        return view('announcements::lead', [ 'lead'=> $lead, 'announcements'=>$announcements, 'leadTabs' => $leadTabs ]);
    }
    
    /**
     * Show the form for updating a Announcement.
     */
    public function staff(Request $request, $id)
    {
        $StaffService = new StaffService;
        
        $staff = $StaffService->find($id);

        $staffTabs = $this->loadModuleTabs('Staff.tabs');

        $announcements = $this->announcementService->query($staff->staff_id, get_class($staff));

        return view('announcements::staff', [ 'staff'=> $staff, 'announcements'=>$announcements, 'staffTabs' => $staffTabs ]);
    }
    
    /**
     * Show the form for updating a Announcement.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $announcements = $this->announcementService->query($project->project_id, get_class($project));

        return view('announcements::project', [ 'project'=> $project, 'announcements'=>$announcements, 'projectTabs' => $projectTabs ]);
    }
}
