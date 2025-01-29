<?php

namespace App\Modules\Items\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Items\Services\ItemService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class ItemController extends Controller
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

        $items = $this->itemService->query($request);
        
        return view('items::list', compact('items'));
    }



    /**
     * Show the form for creating a new Item.
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Items create')) {
            abort(401, 'Unauthorized');
        }

        $groups = $this->itemService->groups();

        return view('items::add-item-modal', compact('groups'));
    }


    /**
     * Show the form for editing Item.
     */
    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Items edit')) {
            abort(401, 'Unauthorized');
        }

        $groups = $this->itemService->groups();

        $item = $this->itemService->find($id);

        return view('items::edit-item-modal', compact('groups', 'item'));
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
        $source = $this->itemService->createItem(array_merge($request->only('name', 'description','price','tax', 'group_id'), $creator));

        return $source ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        // Display a single Item
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
        
        $update = $this->itemService->updateItem($id, $request->only('name', 'description','price','tax', 'group_id'));

        return $update ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Updaetd',
        ], 200) : null;

    }

    
    /**
     * Remove the specified Items from the database.
     */
    public function destroy($id)
    {
        
        $delete = $this->itemService->deleteItem($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Item deleted successfully',
        ], 200) : null;
    }
}
