<?php

namespace App\Modules\Leads\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Modules\Leads\Services\LeadSourceService;

class LeadSourceController extends Controller
{


    protected $leadSourceService;


    public function __construct(LeadSourceService $leadSourceService)
    {
        $this->leadSourceService = $leadSourceService;
    }


    /**
     * Display a listing of LeadSources.
     */
    public function index(Request $request)
    {

        $LeadSources = $this->leadSourceService->query($request);
        
        return view('leads::lead_sources', compact('LeadSources'));
        
    }

    /**
     * Show the form for creating a new LeadSource.
     */
    public function create()
    {
        return view('leads::LeadSource_create');
    }

    /**
     * Store a newly created LeadSource in the database.
     */
    public function store(Request $request)
    {
        
        // Validate incoming request data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        // Create and save the LeadSource
        $source = $this->leadSourceService->createLeadSource($request->only('name', 'status'));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'result' => 'Created',
        ], 200) : null;
    }
    

    /**
     * Update the specified LeadSource in the database.
     */
    public function update(Request $request, $id)
    {
        
        // Validate updated data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $update = $this->leadSourceService->updateLeadSource($request->only('name', 'status', 'source_id'));

        return $update ? response()->json([
            'success' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    /**
     * Remove the specified LeadSource from the database.
     */
    public function destroy($id)
    {
        
        return $this->leadSourceService->updateLeadSource($request);

    }

}
