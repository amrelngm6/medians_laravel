<?php

namespace App\Modules\Uploads\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Uploads\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Projects\Services\ProjectService;
use App\Models\Auth;
use Illuminate\Support\Facades\Storage;



class UploadController extends Controller
{
    protected $uploadService;

    public function __construct(UploadService $uploadService)
    {
        $this->uploadService = $uploadService;
    }

    public function index( Request $request)
    {
        $businessId = Auth::user()->business_id ?? null;

        // List all Uploads
        $files = $this->uploadService->query($request);

        return view('uploads::list', compact('files'));
    }

    public function filter( Request $request)
    {
        // List all Uploads
        $files = $this->uploadService->query($request);

        return view('uploads::rows', compact('files'));
    }

    public function store(Request $request)
    {
        
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'file' => 'required|file',
            'model_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $info = [
            'date' => date('Y-m-d'), 
            'business_id'=> $user->business_id ?? 0,
            'user_id'=> $user->id() ?? 0,
            'user_type'  => get_class($user) ?? null,
        ];

        // Store a new Upload
        $upload = $this->uploadService->createUpload($request->file, array_merge($request->all(),  $info));

        return $upload ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Uploaded successfully',
        ], 200) : null;

    }

    public function show($id)
    {
        // Display a single Upload
        $upload = $this->uploadService->getUploadById($id);
        return view('uploads::show', compact('upload'));
    }

    public function update(Request $request, $id)
    {
        // Update the specified Upload
        $data = $request->all();
        $this->uploadService->updateUpload($id, $data);
        return redirect()->route('uploads.index')->with('success', 'Upload updated successfully.');
    }

    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->cannot('Uploads delete')) {
            
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'error' => 'Unauthorized'
            ], 422);
        }

        // Delete the specified Upload
        $delete = $this->uploadService->deleteUpload($id);
        
        return $delete ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Deleted successfully',
        ], 200) : null;

    }

        /**
     * Show the files at Project page.
     */
    public function project(Request $request, $id)
    {
        $projectService = new ProjectService;
        $project = $projectService->find($id);

        $projectTabs = $this->loadModuleTabs('Projects.tabs');

        $files = $this->uploadService->getAllByModel($project->project_id, get_class($project));

        return view('uploads::project', compact('project', 'files', 'projectTabs'));
    }

    public function download(Request $request, $id)
    {
        $uplaod = $this->uploadService->find($id);

        return Storage::download($uplaod->path);

    }

}
