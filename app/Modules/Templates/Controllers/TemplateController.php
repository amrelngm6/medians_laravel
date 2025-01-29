<?php

namespace App\Modules\Templates\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Templates\Services\TemplateService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class TemplateController extends Controller
{

    protected $templateService;

    public function __construct(TemplateService $templateService)
    {
        $this->templateService = $templateService;
    }

    
    /**
     * Display a listing of Templates.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        if ($user->cannot('Templates view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $templates = $this->templateService->query($request);
        
        return view('templates::list', compact('templates'));
    }



    /**
     * Show the form for creating a new Template.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Templates create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $modules = $this->templateService->modules();

        // Create a new CustomField
        return view('templates::create', compact('modules', 'user'));
    }


    /**
     * Show the form for Editing a new Template.
     */
    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Templates edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $modules = $this->templateService->modules();

        $template = $this->templateService->find($id);

        // Create a new CustomField
        return view('templates::edit', compact('modules', 'user', 'template'));
    }


    public function store(Request $request)
    {
        
        $user = Auth::user();

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
        
        $creator = ['created_by' => $user->id(), 'business_id'=> $user->business_id ?? 0];

        // Create and save the Template
        $source = $this->templateService->createTemplate(array_merge($request->only('name', 'content','model'), $creator));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        // Display a single Template
    }

    /**
     * Update the specified Template in the database.
     */
    public function update(Request $request, $id)
    {
        
        // Validate updated data
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return $update ? response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402) : null;
        }
        
        $update = $this->templateService->updateTemplate($id, $request->only('name', 'content'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified Templates from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->templateService->deleteTemplate($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Template deleted successfully',
        ], 200) : null;
    }
}
