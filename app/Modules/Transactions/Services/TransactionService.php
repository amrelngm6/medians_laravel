<?php

namespace App\Modules\Transactions\Services;

use App\Modules\Transactions\Models\Transaction;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\ModelField;
use App\Modules\CustomFields\Models\CustomField;
use App\Models\Auth;

class TransactionService
{
    public $model;

    public function __construct(Transaction $model)
    {
        $this->model = $model;
    }

    public function createTransaction(array $data)
    {
        $transaction = Transaction::create($data);
        $transaction->code = 'TRX-' . $transaction->id;
        $save =  $transaction->save();

        if ($save  && isset($data['custom_field']))
        {
            $saveFields = $this->storeCustomFields($transaction, $data['custom_field']);
        }

        return $save;
    }

    public function updateTransaction($id, array $data)
    {
        $transaction = Transaction::findOrFail($id);
        return $transaction->update($data);
    }

    public function deleteTransaction($id)
    {
        $transaction = Transaction::findOrFail($id);
        return $transaction->delete();
    }

    
    
    public function storeCustomFields(Transaction $Transaction, $data)
    {
        ModelField::where('business_id', Auth::user()->business_id ?? 0)->where('model_type', Transaction::class)->where('model_id', $Transaction->id)->delete();

        $created = null;
        // Append Model as Morph
        foreach ($data as $key => $value) 
        {
            $field = CustomField::where('business_id', Auth::user()->business_id ?? 0)->where('model', Transaction::class)->where('name', $key)->first();
            $modelData = [];
            $modelData['model_type'] = get_class($Transaction);
            $modelData['model_id'] = $Transaction->id;
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
        return Transaction::forBusiness($business_id)->where('model_type', $class)->where('model_id', $id)->get();
    }

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0;
        $transaction = Transaction::forBusiness($business_id);

        if ($request->has('status_id') && $request->status_id != '0') {
            $transaction->where('status_id', $request->status_id);
        }

        if ($request->has('client_id')) {
            $transaction->where('client_id', $request->client_id);
        }

        if ($request->has('created_by')) {
            $transaction->where('created_by', $request->created_by);
        }

        if ($request->has('date') ) {
            $date = explode(' - ', $request->date);
            $transaction->whereDate('date', '>=', date('Y-m-d', strtotime($date[0])));
            $transaction->whereDate('date', '<', date('Y-m-d', strtotime($date[1] . ' +1 day')));
        }

        return $transaction->with('status')->get();
    }

    public function modules()
    {
        // Business logic for retrieving modules
    }

    public function find($id)
    {
        return Transaction::with('model')->findOrFail($id);
    }

    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Transaction::class)->orderBy('sort', 'ASC')->get();
    }
}
