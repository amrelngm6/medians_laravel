<?php

namespace App\Modules\Activities\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Activities\Services\ActivityService;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class ActivityController extends Controller
{
    protected $service;

    public function __construct(ActivityService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Activity view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $activities = $this->service->query($request);

        return view('activities::list', compact('activities'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        $activities = $this->service->query($request);

        return view('activities::rows', compact('activities'));
    }

    

    

    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->cannot('Activity delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $delete = $this->service->deleteActivity($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Log deleted successfully',
        ], 200) : null;
    }
}
