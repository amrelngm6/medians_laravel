<?php

namespace App\Modules\Notes\Services;

use App\Modules\Notes\Models\Note;
use App\Models\Auth;

class NoteService
{

    public function find($id)
    {
        return Note::forBusiness(Auth::user()->business_id ?? 0)->findOrFail($id);
    }

    public function queryAll($request)
    {
        $Leads = Note::query();

        if (isset($request->date))
        {
            $dates = explode(' - ', $request->date);
            $Leads = $Leads->whereBetween('created_at', [date('Y-m-d 00:00:00', strtotime($dates[0])), date('Y-m-d 23:59:59', strtotime($dates[1]))]);
        }

        return $Leads->forBusiness(Auth::user()->business_id ?? 0)->with('user', 'model')->paginate(100);
    }

    public function query($id, $class)
    {
        $Leads = Note::query();

        return $Leads->forBusiness(Auth::user()->business_id ?? 0)->where("model_id", $id)->where('model_type', $class)->with('user', 'model')->paginate(100);
    }

    public function createNote(array $data)
    {
        $data['business_id'] = Auth::user()->business_id ?? 0;

        return Note::create($data);
    }

    public function updateNote($id, array $data)
    {
        // Business logic for updating a Note
    }

    public function deleteNote($id)
    {
        return Note::forBusiness(Auth::user()->business_id ?? 0)->findOrFail($id)->delete();
    }
}
