<?php

namespace App\Modules\Deals\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;
use App\Modules\Deals\Services\service;
use App\Modules\Tasks\Services\TaskService;
use App\Http\Controllers\Controller;

class DealController extends Controller
{

    protected $service;

    public function __construct(service $service)
    {
        $this->service = $service;
    }

    
    /**
     * Display a listing of Proprities.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        // if (!$user || $user->cannot('Deals view') && Auth::guardName() != 'superadmin') {
        //     abort(401, 'Unauthorized');
        // }

        $Deals = $this->service->query($request);
        
        return view('deal::list', compact('Deals'));
    }



    /**
     * Show the form for creating a new Deal.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Deals create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $model = $request->model ?? '';

        return view('deal::new-deal-modal', compact('model'));
    }


    /**
     * Show the form for creating a new Deal.
     */
    public function create_stage(Request $request, $id)
    {
        $deal = $this->service->find($id);

        return view('deal::add-stage', compact('deal'));
    }

    /**
     * Show the form for creating a new Deal.
     */
    public function edit_stage(Request $request, $id)
    {
        $stage = $this->service->findStage($id);

        return view('deal::edit-stage', compact('stage'));
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

        $user = Auth::user();

        $info = ['created_by' => $user->id(), 'business_id'=> $user->business_id ?? 0];

        // Create and save the Deal
        $source = $this->service->createDeal(array_merge($request->only('name', 'model','description'), $info));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }


    public function storeStage(Request $request)
    {
        try {
            
            $user = Auth::user();

            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'description' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            $user = Auth::user();

            $info = ['created_by' => $user->id(), 'business_id'=> $user->business_id ?? 0];

            // Create and save the Deal
            $source = $this->service->createStage(array_merge($request->only('deal_id', 'name', 'model_id', 'model_type', 'color', 'sort','description'), $info));

            return $source ? response()->json([
                'success' => true,
                'title' => 'Done',
                'reload' => true,
                'result' => 'Created',
            ], 200) : null;
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage());
        }
    }

    public function show($id)
    {
        // Display a single Deal
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Deals edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }   

        $deal = $this->service->find($id);

        return view('deal::edit', compact('deal'));
    }

    /**
     * Update the specified Deal in the database.
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
        
        $update = $this->service->updateDeal($id, $request->only('name', 'model','sort','color', 'description', 'id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    /**
     * Update the specified Deal in the database.
     */
    public function updateStage(Request $request, $id)
    {
        try {
             
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
            
            $update = $this->service->updateStage($id, $request->only('name', 'description','sort','color', 'id'));

            return $update ? response()->json([
                'success' => true,
                'reload' => true,
                'title' => 'Done',
                'result' => 'Updaetd',
            ], 200) : null;

        } catch (Exception $e) {
            return  $this->hasError($e->getMessage());
        }

    }

    
    /**
     * Remove the specified Proprities from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->service->deleteDeal($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Deals deleted successfully',
        ], 200) : null;
    }
    
    /**
     * Remove the specified Proprities from the database.
     */
    public function destroyStage(Request $request, $id)
    {
        
        $delete = $this->service->deleteStage($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Deal Stage deleted successfully',
        ], 200) : null;
    }
}
