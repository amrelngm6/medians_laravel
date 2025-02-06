<?php

namespace App\Modules\Actions\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Actions\Services\ReminderService;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;
use App\Modules\Tasks\Models\Task;

class ReminderController extends Controller
{
    
    protected $service;

    public function __construct(ReminderService $service)
    {
        $this->service = $service;
    }

    /**
     * Load all reminders list
     */
    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Reminder view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        return view('reminders::list', compact('user'));
    }

    /**
     * Filter reminders
     */
    public function filter(Request $request)
    {
        $user = Auth::user();

        $reminders = $this->service->query($request);


        return view('reminders::rows', compact('reminders'));
    }

    /**
     * Create reminder modal
     */
    public function create(Request $request)
    {
        $user = Auth::user();

        $modelId = $user->id();
        
        $modelType = get_class($user);

        return view('reminders::add-reminder', compact('user','modelId','modelType'));
    }

    /**
     * Create reminder modal
     */
    public function createForModel(Request $request, $model_id = 0, $model_type = null)
    {
        $user = Auth::user();

        $modelId = $model_id;
        
        $modelType = $model_type;

        return view('reminders::add-reminder', compact('user','modelId','modelType'));
    }

    
    /**
     * Filter reminders
     */
    public function showList(Request $request, $modelId, $modelType)
    {
        $user = Auth::user();

        $reminders = $this->service->query($request, $modelId, $modelType);

        $modalRoute = route('Tasks.project_task', $modelId);

        return view('reminders::list-modal', compact('reminders', 'modalRoute'));
    }

    /**
     * Save reminder
     */
    public function store(Request $request )
    {
        
        $user = Auth::user();

        if ($user->cannot('Reminder create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            $today = date('Y-m-d');
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'model_id' => "integer",
                'model_type' => "required|string",
                'date' => "required|date",
                'time' => "required",
                'description' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            $creator = ['date'=> $request->date.' '.$request->time, 'user_id'=>$user->staff_id, 'user_type' => get_class($user), 'business_id'=>$user->business_id];

            // Create and save the Reminder
            $reminder = $this->service->createReminder(array_merge($creator, $request->only('description', 'name', 'user_type', 'user_id', 'model_id', 'model_type')), $request->file);

            return $reminder ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }


    public function show($id)
    {
        // Display a single Reminder
    }

    public function update($id)
    {
        // Update the specified Reminder
    }

    public function destroy($id)
    {
        
        $user = Auth::user();

        if ($user->cannot('Reminder delete') && Auth::guardName() != 'superadmin') {
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
     * User subscribe to notifications
     */
    public function subscribe(Request $request)
    {
        $user = Auth::user();
                
        $validator = Validator::make($request->all(), [
            'endpoint' => 'required|string',
            'keys.auth' => 'required',
            'keys.p256dh' => 'required',
        ]);

        if ($validator->fails()) {
            return $this->hasError($validator->errors(), 'Validation Error');
        }

        $user->updatePushSubscription(
            $request->endpoint,
            $request->keys['p256dh'],
            $request->keys['auth']
        );

        return response()->json(['success' => true], 200);
    }
}
