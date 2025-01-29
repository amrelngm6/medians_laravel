<?php

namespace App\Modules\CustomFields\Controllers;

use App\Http\Controllers\Controller;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Auth;

use App\Modules\CustomFields\Services\CustomFieldService;
use App\Models\Module;

class CustomFieldController extends Controller
{
    
    protected $customFieldService;

    public function __construct(CustomFieldService $customFieldService)
    {
        $this->customFieldService = $customFieldService;
    }


    /**
     * Display a listing of custom fields.
     */
    public function index(Request $request)
    {

        if (Auth::user()->cannot('CustomField view')  && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $fields = $this->customFieldService->query($request);
        
        return view('custom_field::list', compact('fields'));
    }

    public function create()
    {   
        $modules = Module::getActive();

        $types = $this->customFieldService->types();

        // Create a new CustomField
        return view('custom_field::create', compact('modules', 'types'));
    }

    public function edit($id)
    {   

        $field = $this->customFieldService->find($id);

        $modules = Module::getActive();

        $types = $this->customFieldService->types();

        // Create a new CustomField
        return view('custom_field::edit', compact( 'field', 'modules', 'types'));
    }

    public function store(Request $request)
    {
        try 
        {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'model' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'sort' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            // Create and save the CustomField
            $customField = $this->customFieldService->createCustomField( array_merge(['user_id'=>$user->staff_id, 'user_type'=> get_class($user)], $request->only('name', 'title', 'is_disabled', 'type', 'is_required', 'show_at_table', 'show_at_overview', 'placeholder', 'options', 'model', 'class', 'default_value', 'sort', 'help_text')));
            
            return $customField ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function show($id)
    {
        // Display a single CustomField
    }

    public function update(Request $request, $id)
    {
        
        try 
        {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'type' => 'required|string|max:255',
                'sort' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            // Create and save the CustomField
            $customField = $this->customFieldService->updateCustomField($id, array_merge(['user_id'=>$user->staff_id, 'user_type'=> get_class($user)], $request->only('title', 'is_disabled', 'type', 'is_required', 'show_at_table', 'show_at_overview', 'placeholder', 'options', 'class', 'default_value', 'sort', 'help_text')));
            
            return $customField ? $this->jsonResponse('Updated successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function destroy($id)
    {
        // Delete the specified CustomField
    }
}
