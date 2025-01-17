<?php

namespace App\Modules\Expenses\Services;

use App\Modules\Expenses\Models\Expense;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\Category;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelCategory;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\Customers\Services\StaffService;
use App\Models\Auth;

class ExpenseService
{
    public $model;

    public function __construct(Expense $model)
    {
        $this->model = $model;
    }

    public function createExpense(array $data)
    {
        $expense = Expense::create($data);
        $expense->code = 'EXP-' . $expense->id;
        $save =  $expense->save();

        if ($save  && isset($data['category_id']))
        {
            $saveCategory = ModelCategory::create([
                'model_id' => $expense->id,
                'model_type' => Expense::class,
                'category_id' => $data['category_id'],
                'created_by' => Auth::user()->id()
            ]);
        }

        return $save;
    }

    public function updateExpense($id, array $data)
    {
        $expense = Expense::findOrFail($id);
        return $expense->update($data);
    }

    public function deleteExpense($id)
    {
        $expense = Expense::findOrFail($id);
        return $expense->delete();
    }

    
    
    public function storeCustomFields(Expense $Expense, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', Expense::class)->where('model_id', $Expense->id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Expense::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($Expense);
            $modelData['model_id'] = $Expense->id;
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
        return Expense::forBusiness($business_id)->where('model_type', $class)->where('model_id', $id)->get();
    }

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $expense = Expense::forBusiness($business_id);

        if ($request->has('status_id') && $request->status_id != '0') {
            $expense->where('status_id', $request->status_id);
        }

        
        if ($request->has('category_id') && $request->category_id != '0') {
            $expense->whereHas('category', function ($query) use ($request) {
                $query->where('category_id', $request->category_id)->with('category');
            });
        }

        if ($request->has('client_id')) {
            $expense->where('client_id', $request->client_id);
        }

        if ($request->has('created_by')) {
            $expense->where('created_by', $request->created_by);
        }

        if ($request->model_type) {
            $expense->where('model_type', $request->model_type);
        }

        if ($request->has('date')) {
            $date = explode(' - ', $request->date);
            $expense->whereDate('date', '>=', date('Y-m-d', strtotime($date[0])));
            $expense->whereDate('date', '<', date('Y-m-d', strtotime(' +1 day', strtotime($date[1]))));
        }

        return $expense->with('status','user')->get();
    }

    public function modules()
    {
        // Business logic for retrieving modules
    }

    public function find($id)
    {
        return Expense::with('model')->findOrFail($id);
    }

    
    /**
     * Get Staff list
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
        return Status::default([Auth::user()->business_id, '0'])->where('model', Expense::class)->orderBy('sort', 'ASC')->get();
    }

    /**
     * Get allowed Categories
     */
    public function loadCats()
    {
        return Category::default([Auth::user()->business_id, '0'])->where('model', Expense::class)->get();
    }
}
