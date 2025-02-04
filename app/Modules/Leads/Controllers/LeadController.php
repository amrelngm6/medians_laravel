<?php

namespace App\Modules\Leads\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Leads\Services\LeadService;

class LeadController extends Controller
{

    /** Page Tabs route prefix */
    public $tabsPrefix = 'Lead.tabs';

    protected $leadService;


    public function __construct(LeadService $leadService)
    {
        $this->leadService = $leadService;
    }


    /**
     * Display a listing of Leads.
     */
    public function index(Request $request)
    {

        $Leads = $this->leadService->query($request);
        
        $custom_fields = $this->leadService->loadModelFields(); 
        
        return view('leads::leads', compact('Leads', 'custom_fields'));
        
    }

    /**
     * Show the form for creating a new Lead.
     */
    public function create()
    {

        $leadTabs = $this->loadModuleTabs($this->tabsPrefix);

        $staffList = $this->leadService->loadStaff(); 

        $statusList = $this->leadService->loadStatusList(); 

        $leadSources = $this->leadService->loadSources(); 

        $custom_fields = $this->leadService->loadModelFields(); 

        return view('leads::create', [ 'custom_fields'=> $custom_fields, 'statusList'=> $statusList, 'staffList'=>$staffList,  'leadSources'=> $leadSources, 'leadTabs' => $leadTabs  ]);
    }

    /**
     * Show the form for updating a Lead.
     */
    public function edit($id)
    {
        $leadTabs = $this->loadModuleTabs($this->tabsPrefix);

        $staffList = $this->leadService->loadStaff(); 

        $statusList = $this->leadService->loadStatusList(); 

        $leadSources = $this->leadService->loadSources(); 

        $lead = $this->leadService->find($id);
        
        $custom_fields = $this->leadService->loadModelFields(); 

        return view('leads::edit', ['custom_fields'=> $custom_fields, 'lead'=>$lead, 'statusList'=> $statusList, 'staffList'=>$staffList,  'leadSources'=> $leadSources, 'leadTabs' => $leadTabs  ]);
    }

    /**
     * Show the form for updating a Lead.
     */
    public function overview(Request $request, $id)
    {

        $leadTabs = $this->loadModuleTabs($this->tabsPrefix);

        $lead = $this->leadService->find($id);

        return view('leads::overview', [ 'lead'=>$lead, 'leadTabs' => $leadTabs ]);
    }

    /**
     * Show the form for updating a Lead.
     */
    public function settings(Request $request, $id)
    {
        $leadTabs = $this->loadModuleTabs($this->tabsPrefix);

        $lead = $this->leadService->find($id);

        return view('leads::overview', [ 'lead'=>$lead, 'leadTabs' => $leadTabs ]);
    }

    /**
     * Store a newly created Lead in the database.
     */
    public function store(Request $request)
    {
        
        try {
                
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'assigned_to' => 'required|integer|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }

            // Create and save the Lead
            $lead = $this->leadService->createLead($request->only('custom_field', 'location_info','first_name', 'last_name', 'email', 'phone', 'source_id', 'company', 'position', 'about', 'type', 'assigned_to', 'status'));
            
            return $lead ? response()->json([
                'success' => true,
                'title' => 'Done',
                'redirect' => route('Lead.tabs.overview', $lead->lead_id),
                'result' => 'Created',
            ], 200) : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }
    

    /**
     * Update the specified Lead in the database.
     */
    public function update(Request $request, $id)
    {

        try 
        {
            // Validate updated data
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            
            $update = $this->leadService->updateLead($request->only('custom_field', 'lead_id', 'location_info','first_name', 'last_name', 'email', 'phone', 'source_id', 'company', 'position', 'about', 'type', 'assigned_to', 'status'), $id);

            return $update ? response()->json([
                'success' => true,
                'title' => 'Done',
                'result' => 'Updated successfully',
            ], 200) : 'null';

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    /**
     * Remove the specified Lead from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->leadService->deleteLead($id);

        return $delete == 1 
        ? response()->json([
            'success' => true,
            'title' => 'Done',
            'result' => 'Deleted successfully',
            'reload' => true,
        ], 200) 
        : $this->hasError($delete, 'Validation Error');

    }

    /**
     * Search Leads based on a query.
     */
    public function search(Request $request)
    {
        $query = $request->input('query');
        $Leads = Lead::where('name', 'like', "%{$query}%")
            ->orWhere('email', 'like', "%{$query}%")
            ->paginate(10);

        return view('leads::index', compact('Leads'));
    }
}
