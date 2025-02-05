<?php

namespace App\Modules\Announcements\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Announcements\Services\AnnouncementService;
use App\Modules\Leads\Services\LeadService;
use App\Modules\Customers\Services\StaffService;
use App\Modules\Customers\Services\ClientService;
use App\Modules\Projects\Services\ProjectService;
use App\Modules\Items\Services\ItemService;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class AnnouncementController extends Controller
{
    
    protected $service;

    public function __construct(AnnouncementService $service)
    {
        $this->service = $service;
    }


    public function index( Request $request)
    {
        // List all Announcements
        $user = Auth::user();

        if ($user->cannot('Announcement view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        // Display a single Announcement
        $statusList = $this->service->loadStatusList();
        $clientService = new ClientService;
        $clients = $clientService->query();
        
        $ItemService = new ItemService;
        $items = $ItemService->query();

        return view('announcements::list', compact('items', 'user', 'statusList', 'clients'));
   
    }

    
    public function filter(Request $request)
    {
        $user = Auth::user();

        $announcements = $this->service->query($request);

        $model = $this->service->model ?? null;

        return view('announcements::rows', compact('announcements', 'model'));
    }

    

    public function store(Request $request)
    {

        
        $user = Auth::user();

        if ($user->cannot('Announcement create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

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
            $userData = ['user_id'=>$user->staff_id, 'user_type'=> get_class($user), 'business_id'=>$user->business_id ?? 0];
            
            // Handle Dates
            $dates = explode(" - ",  $request->date);
            $datesData['start'] = date("Y-m-d", strtotime($dates[0]));
            $datesData['end'] = date("Y-m-d", strtotime($dates[1]));

            $userData['model_type'] = !empty($request->model_type) ? $request->model_type : get_class($user);
            $userData['model_id'] = !empty($request->model_id) ? $request->model_id : $user->staff_id;
            $userData['staff_access'] = !empty($request->staff_access);
            $userData['is_private'] = !empty($request->is_private);

            // Create and save the Announcement
            $announcement = $this->service->createAnnouncement( array_merge($datesData, $userData, $request->only('name', 'description')) );
            
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
        
        $user = Auth::user();

        if ($user->cannot('Announcement delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            return $this->service->deleteAnnouncement($id) 
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

        $announcements = $this->service->query($request, $lead->lead_id, get_class($lead));

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

        $announcements = $this->service->query($request, $staff->staff_id, get_class($staff));

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

        $announcements = $this->service->query($request, $project->project_id, get_class($project));

        return view('announcements::project', [ 'project'=> $project, 'announcements'=>$announcements, 'projectTabs' => $projectTabs ]);
    }
}
