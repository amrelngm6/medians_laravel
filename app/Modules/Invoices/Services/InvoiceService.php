<?php

namespace App\Modules\Invoices\Services;

use App\Modules\Invoices\Models\Invoice;
use App\Modules\Invoices\Models\InvoiceItem;
use App\Modules\Core\Models\Status;
use App\Models\Auth;

class InvoiceService
{
    public $model ;

    public function __construct(Invoice $model = null)
    {
        $this->model = $model;
    }

    public function createInvoice(array $data, $items = [])
    {
        $invoice = Invoice::create($data);

        if ($items) {         
            foreach ($items as $item) { 
                $item['invoice_id'] = $invoice->id;
                $item['unit_price'] = $item['price'];
                $item['business_id'] = $invoice->business_id;

                InvoiceItem::create($item);}   
        }   

        $invoice->code = 'INV-'.$invoice->id;
        return $invoice->save();
    }

    public function updateInvoice($id, array $data)
    {
        $invoice = Invoice::findOrFail($id);
        return $invoice->update($data);
    }

    public function deleteInvoice($id)
    {
        $invoice = Invoice::findOrFail($id);
        return $invoice->delete();
    }

    public function getByModel($id, $class)
    {
        $business_id = Auth::user()->business_id ?? 0; 
        return Invoice::forBusiness($business_id)->where('model_type', $class)->where('model_id', $id)->get();
    }

    public function query($request)
    {
        $business_id = Auth::user()->business_id ?? 0; 
        $invoice = Invoice::forBusiness($business_id);

        if ($request->has('status_id') && $request->status_id != '0') {
            $invoice->where('status_id', $request->status_id);
        }

        if ($request->has('client_id')) {
            $invoice->where('client_id', $request->client_id);
        }

        if ($request->has('created_by')) {
            $invoice->where('created_by', $request->created_by);
        }

        if ($request->has('date') && is_array($request->date)) {
            $date = explode(' - ', $request->date);
            $invoice->whereDate('date', '>=', date('Y-m-d', strtotime($date[0]))); 
            $invoice->whereDate('date', '<', date('Y-m-d', strtotime($date[1]. ' +1 day'))); 
        }

        return $invoice->get();
        
    }

    public function modules()
    {
        // Business logic for retrieving modules
    }

    public function find($id)
    {
        return Invoice::with('items' ,'model')->findOrFail($id);
    }

    public function findItem($id)
    {
        return InvoiceItem::with('model')->findOrFail($id);
    }

    
    /**
     * Get allowed Status list
     */
    public function loadStatusList()
    {
        return Status::default([Auth::user()->business_id, '0'])->where('model', Invoice::class)->orderBy('sort', 'ASC')->get();
    }
}
