<?php

namespace App\Modules\Labels\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Labels\Services\LabelService;
use App\Modules\Customers\Services\LeadService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class LabelController extends Controller
{

    
    protected $labelService;


    public function __construct(LabelService $labelService)
    {
        $this->labelService = $labelService;
    }


    public function index()
    {
        // List all Labels
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

            // Create and save the Label
            $label = $this->labelService->createLabel( array_merge(['user_id'=>$user->staff_id, 'user_type'=> get_class($user)], $request->only('description', 'model_id', 'model_type', 'user_id', 'user_type')));
            
            return $label ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
            
        }
    }

    public function show($id)
    {
        // Display a single Label
    }

    public function update($id)
    {
        // Update the specified Label
    }

    public function destroy($id)
    {
        try {
            return $this->labelService->deleteLabel($id) 
                ? $this->jsonResponse('Deleted successfully') 
                : $this->hasError('Failed to destroy') ;

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage()) ;
        }

    }

    
    /**
     * Show the form for updating a Label.
     */
    public function lead(Request $request, $id)
    {
        $LeadService = new LeadService;
        
        $lead = $LeadService->find($id);

        $leadTabs = $this->loadModuleTabs('Lead.tabs');

        $labels = $this->labelService->query($lead->lead_id, get_class($lead));

        return view('labels.lead', [ 'lead'=> $lead, 'labels'=>$labels, 'leadTabs' => $leadTabs ]);
    }
}
