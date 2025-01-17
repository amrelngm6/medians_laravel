<?php

namespace App\Modules\CreditNotes\Services;

use App\Modules\CreditNotes\Models\CreditNote;
use App\Modules\CreditNotes\Models\NoteItem;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\Category;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelCategory;
use App\Modules\CustomFields\Models\CustomField;
use App\Modules\Customers\Services\StaffService;
use App\Models\Auth;

class CreditNoteService
{
    public $model;

    public function __construct(CreditNote $model)
    {
        $this->model = $model;
    }

    public function createCreditNote(array $data)
    {
        $credit_note = CreditNote::create($data);
        $credit_note->code = 'CNT-' . count($this->query(null));
        $save =  $credit_note->save();

        if ($save  && isset($data['category_id']))
        {
            $saveCategory = ModelCategory::create([
                'model_id' => $credit_note->id,
                'model_type' => CreditNote::class,
                'category_id' => $data['category_id'],
                'created_by' => Auth::user()->id()
            ]);
        }

        if ($save  && isset($data['items']))
        {
            foreach ($data['items'] as $item) { 
                $item['credit_note_id'] = $credit_note->id;
                $item['invoice_item_id'] = $item['model_id'];
                $item['unit_price'] = $item['price'];
                $item['subtotal'] = $item['price'] * $item['quantity'];
                $item['business_id'] = $credit_note->business_id;
                $item['created_by'] = Auth::user()->id();

                $saveItem = NoteItem::create($item);
            }
        }

        return $save;
    }

    public function updateCreditNote($id, array $data)
    {
        $credit_note = CreditNote::findOrFail($id);
        return $credit_note->update($data);
    }

    public function deleteCreditNote($id)
    {
        $credit_note = CreditNote::findOrFail($id);
        return $credit_note->delete();
    }

    
    
    public function storeCustomFields(CreditNote $CreditNote, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', CreditNote::class)->where('model_id', $CreditNote->id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', CreditNote::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($CreditNote);
            $modelData['model_id'] = $CreditNote->id;
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
        return CreditNote::forBusiness($business_id)->where('model_type', $class)->where('model_id', $id)->get();
    }

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $credit_note = CreditNote::forBusiness($business_id);

        if ($request->has('status_id') && $request->status_id != '0') {
            $credit_note->where('status_id', $request->status_id);
        }

        
        if ($request->has('category_id') && $request->category_id != '0') {
            $credit_note->whereHas('category', function ($query) use ($request) {
                $query->where('category_id', $request->category_id)->with('category');
            });
        }

        if ($request->has('client_id')) {
            $credit_note->where('client_id', $request->client_id);
        }

        if ($request->has('created_by')) {
            $credit_note->where('created_by', $request->created_by);
        }

        if ($request->model_type) {
            $credit_note->where('model_type', $request->model_type);
        }

        if ($request->has('date')) {
            $date = explode(' - ', $request->date);
            $credit_note->whereDate('date', '>=', date('Y-m-d', strtotime($date[0])));
            $credit_note->whereDate('date', '<', date('Y-m-d', strtotime(' +1 day', strtotime($date[1]))));
        }

        return $credit_note->with('status','user')->get();
    }

    public function modules()
    {
        // Business logic for retrieving modules
    }

    public function find($id)
    {
        return CreditNote::with('model','items')->findOrFail($id);
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
        return Status::default([Auth::user()->business_id, '0'])->where('model', CreditNote::class)->orderBy('sort', 'ASC')->get();
    }

    /**
     * Get allowed Categories
     */
    public function loadCats()
    {
        return Category::default([Auth::user()->business_id, '0'])->where('model', CreditNote::class)->get();
    }
}
