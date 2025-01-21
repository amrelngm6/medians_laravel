<?php

namespace App\Modules\Goals\Services;

use App\Modules\Goals\Models\Goal;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\Category;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelCategory;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\Customers\Services\StaffService;
use App\Models\Auth;

class GoalService
{
    public $model;

    public function __construct(Goal $model)
    {
        $this->model = $model;
    }

    public function createGoal(array $data)
    {
        $goal = Goal::create($data);
        $goal->code = 'EXP-' . $goal->id;
        $save =  $goal->save();

        if ($save  && isset($data['category_id']))
        {
            $saveCategory = ModelCategory::create([
                'model_id' => $goal->id,
                'model_type' => Goal::class,
                'category_id' => $data['category_id'],
                'created_by' => Auth::user()->id()
            ]);
        }

        return $save;
    }

    public function updateGoal($id, array $data)
    {
        $goal = Goal::findOrFail($id);
        return $goal->update($data);
    }

    public function deleteGoal($id)
    {
        $goal = Goal::findOrFail($id);
        return $goal->delete();
    }

    
    
    public function storeCustomFields(Goal $Goal, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', Goal::class)->where('model_id', $Goal->id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Goal::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($Goal);
            $modelData['model_id'] = $Goal->id;
            $modelData['field_id'] = $field->id ?? 0;
            $modelData['title'] = $field->title ?? '';
            $modelData['position'] = $field->sort ?? 0;
            $modelData['business_id'] = Auth::user()->business_id ?? 0;
            $modelData['code'] = $key;
            $modelData['value'] = is_array($value) ? implode(',', $value) : $value;
            $created = ModelField::firstOrCreate($modelData);
        }

        return $created;
    }




    public function getByModel($id, $class)
    {
        $business_id = Auth::user()->business_id ?? 0;
        return Goal::forBusiness($business_id)->where('model_type', $class)->where('model_id', $id)->get();
    }

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $goal = Goal::forBusiness($business_id);

        if ($request->has('status_id') && $request->status_id != '0') {
            $goal->where('status_id', $request->status_id);
        }

        
        if ($request->has('category_id') && $request->category_id != '0') {
            $goal->whereHas('category', function ($query) use ($request) {
                $query->where('category_id', $request->category_id)->with('category');
            });
        }

        if ($request->has('client_id')) {
            $goal->where('client_id', $request->client_id);
        }

        if ($request->has('created_by')) {
            $goal->where('created_by', $request->created_by);
        }

        if ($request->model_type) {
            $goal->where('model_type', $request->model_type);
        }

        if ($request->has('date')) {
            $date = explode(' - ', $request->date);
            $goal->whereDate('date', '>=', date('Y-m-d', strtotime($date[0])));
            $goal->whereDate('date', '<', date('Y-m-d', strtotime(' +1 day', strtotime($date[1]))));
        }

        return $goal->with('status','user')->get();
    }

    public function modules()
    {
        // Business logic for retrieving modules
    }

    public function find($id)
    {
        return Goal::with('model')->findOrFail($id);
    }

    
    /**
     * Get Clients list
     */
    public function staff()
    {
        $StaffService = new StaffService;
        return $StaffService->query();
    }

    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Goal::class)->orderBy('sort', 'ASC')->get();
    }

    /**
     * Get allowed Categories
     */
    public function loadCats()
    {
        return Category::default([Auth::user()->business_id, '0'])->where('model', Goal::class)->get();
    }
}
