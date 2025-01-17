<?php

namespace App\Modules\Notes\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Notes\Services\NoteService;
use App\Modules\Leads\Services\LeadService;
use App\Modules\Customers\Services\StaffService;
use App\Modules\Projects\Services\ProjectService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    
    protected $noteService;


    public function __construct(NoteService $noteService)
    {
        $this->noteService = $noteService;
    }


    public function index(Request $request)
    {
        $notes = $this->noteService->queryAll($request);

        return view('notes::list', compact('notes'));
    }

    public function ajax(Request $request)
    {
        $notes = $this->noteService->queryAll($request);

        return view('notes::rows', compact('notes'));
    }

    public function store(Request $request)
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'description' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            // Create and save the Note
            $note = $this->noteService->createNote( array_merge(['user_id'=>$user->staff_id, 'user_type'=> get_class($user)], $request->only('description', 'model_id', 'model_type', 'user_id', 'user_type')));
            
            return $note ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    public function show($id)
    {
        // Display a single Note
    }

    public function update($id)
    {
        // Update the specified Note
    }

    public function destroy($id)
    {
        try {
            return $this->noteService->deleteNote($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }

    
    /**
     * Show the form for updating a Note.
     */
    public function lead(Request $request, $id)
    {
        $LeadService = new LeadService;
        
        $lead = $LeadService->find($id);

        $leadTabs = $this->loadModuleTabs('Lead.tabs');

        $notes = $this->noteService->query($lead->lead_id, get_class($lead));

        return view('notes::lead', [ 'lead'=> $lead, 'notes'=>$notes, 'leadTabs' => $leadTabs ]);
    }
    
    /**
     * Show the form for updating a Note.
     */
    public function staff(Request $request, $id)
    {
        $staffService = new StaffService;
        
        $staff = $staffService->find($id);

        $staffTabs = $this->loadModuleTabs('Staff.tabs');

        $notes = $this->noteService->query($staff->staff_id, get_class($staff));

        return view('notes::staff', ['wrapper'=> 'customers.staff', 'staff'=> $staff, 'modelId'=> $staff->staff_id, 'modelType'=> get_class($staff), 'notes'=>$notes, 'staffTabs' => $staffTabs ]);
    }
    
    /**
     * Show the form for updating a Note.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $notes = $this->noteService->query($project->project_id, get_class($project));

        return view('notes::project', ['project'=> $project, 'modelId'=> $project->project_id, 'modelType'=> get_class($project), 'notes'=>$notes, 'projectTabs' => $projectTabs ]);
    }
}
