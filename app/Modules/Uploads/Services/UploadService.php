<?php

namespace App\Modules\Uploads\Services;

use App\Modules\Uploads\Models\Upload;
use Illuminate\Support\Facades\Storage;
use App\Models\Auth;

class UploadService
{

    

    public function query($request)
    {
        $query = Upload::forBusiness(Auth::user()->business_id ?? null);

        if ($request->has('name'))
        {
            $query = $query->where('file_name','like','%'. $request->get('name') .'%');
        }

        if ($request->has('type'))
        {
            $query = $query->where('filetype','like','%'. $request->get('type') .'%');
        }

        if ($request->has('date') ) {
            $date = explode(' - ', $request->date);
            $query->whereDate('created_at', '>=', date('Y-m-d', strtotime($date[0])));
            $query->whereDate('created_at', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }
        
        return $query->get();
    }

    public function getAllByModel($id, $model)
    {
        $scope = basename($model);
        return Upload::forBusiness(Auth::user()->business_id ?? null)
        ->$scope($id, $model)
        ->get();
    }

    public function getByModel($id, $model)
    {
        return Upload::forBusiness(Auth::user()->business_id ?? null)->where('model_id', $id)->where('model_type', $model)->get();
    }

    public function getUserUploads($user_id, $user_type)
    {
        return Upload::where('user_type',$user_type)->where('user_id',$user_id)->forBusiness(Auth::user()->business_id ?? null)->get();
    }

    public function getUploadById($id)
    {
        return Upload::forBusiness(Auth::user()->business_id ?? null)->findOrFail($id);
    }

    public function find($id)
    {
        return Upload::forBusiness(Auth::user()->business_id ?? null)->findOrFail($id);
    }

    public function createUpload($file, array $data)
    {
        $user = Auth::user();

        $path = Storage::disk('local')->put('documents', $file);
        $data['path'] = $path;
        $data['filetype'] = $file->getClientOriginalExtension();
        $data['file_name'] = $file->getClientOriginalName();
        $data['size'] = $file->getSize();
        $data['mime_type'] = $file->getClientMimeType();

        // Business logic for creating an Upload
        return Upload::create($data);
    }

    public function updateUpload($id, array $data)
    {
        // Business logic for updating an Upload
        $upload = Upload::findOrFail($id);
        $upload->update($data);
        return $upload;
    }

    public function deleteUpload($id)
    {
        // Business logic for deleting an Upload
        $upload = Upload::findOrFail($id);
        return $upload->delete();
    }
}
