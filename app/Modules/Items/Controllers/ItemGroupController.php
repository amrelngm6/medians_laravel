<?php

namespace App\Modules\Items\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Items\Services\ItemService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class ItemGroupController extends Controller
{

    protected $itemService;

    public function __construct(ItemService $itemService)
    {
        $this->itemService = $itemService;
    }

    
    
    /**
     * Display a listing of Items.
     */
    public function index(Request $request)
    {

        $user = Auth::user();

        if ($user->cannot('Items view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $groups = $this->itemService->groups();
        
        return view('items::groups_list', compact('groups'));
    }


    /**
     * Show the form for creating a new Item.
     */
    public function create(Request $request, $id = null)
    {
        $user = Auth::user();

        if ($user->cannot('Items create')) {
            abort(401, 'Unauthorized');
        }

        $groups = $this->itemService->groups();
        
        $modalRoute = route($id ? 'Item.edit' : 'Item.create', $id ?? 0);

        return view('items::add-group-modal', compact('groups', 'modalRoute'));
    }


    /**
     * Show the form for editing group.
     */
    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Items edit')) {
            abort(401, 'Unauthorized');
        }

        $item = $this->itemService->findGroup($id);

        return view('items::edit-group-modal', compact('item'));
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
        
        $creator = ['created_by' => $user->id(), 'business_id' => $user->business_id ?? 0];

        // Create and save the Item
        $source = $this->itemService->createGroup(array_merge($request->only('name'), $creator));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => false,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        // Display a single Group
    }

    /**
     * Update the specified Items in the database.
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
        
        $update = $this->itemService->updateGroup($id, $request->only('name'));

        return $update ? response()->json([
            'success' => true,
            'reload' => false,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified Items from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->itemService->deleteGroup($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Group deleted successfully',
        ], 200) : null;
    }
}
