<?php

namespace App\Modules\Packages\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Modules\Packages\Services\PackageService;
use App\Modules\Packages\Services\SubscriptionsService;

class PackageSubscriptionController extends Controller
{


    protected $subscriptionService;


    public function __construct(PackageService $subscriptionService)
    {
        $this->subscriptionService = $subscriptionService;
    }


	

	/**
	 * Show subscriptions list
	 * 
	 * @return [] 
	*/
	public function index(Request $request) 
	{	

		$subscriptions = $this->subscriptionService->queryAll();

		return view('packages::subscriptions', compact('subscriptions'));
    }


	

	/**
	 * Store item to database
	 * 
	 * @return [] 
	*/
	public function store() 
	{	
		
        try {
			
			$item = $this->packageRepo->find($params['package_id']);

			$params['customer_id'] = $customer->customer_id;
			$params['payment_type'] = $item->is_paid ? 'paid' : 'free';
			$params['status'] = $item->is_paid ? 'pending' : 'active';
			$params['package_id'] = $item->package_id;
			$params['start_date'] = date("Y-m-d");
			switch ($params['duration']) 
			{
				case 'quarter':
					$params['end_date'] = date('Y-m-d', strtotime("+3 months"));
					$params['duration'] = 'quarter';
					break;
				
				case 'year':
					$params['end_date'] = date('Y-m-d', strtotime("+1 year"));
					$params['duration'] = 'year';
					break;
				
				default:
					$params['end_date'] = date('Y-m-d', strtotime("+1 month"));
					$params['duration'] = 'month';
					break;
			}

			$cost = 'cost_'.$params['duration'];
			$params['total_cost'] = $item->$cost;

			$this->validate($params, $item);

			$save = $this->repo->store($params);
			$redirect = '/studio/subscriptions';

			if (isset($save->subscription_id) && $save->total_cost > 0)
			{
				$InvoiceController = new \Medians\Invoices\Application\InvoiceController;
				$invoiceParams = [];
				$invoiceParams['customer_id'] = $customer->customer_id;
				$invoiceParams['subscription_id'] = $save->subscription_id;
				$invoiceParams['payment_method'] = $params['payment_method'] ?? 'paypal';
				$invoiceParams['subtotal'] = $params['total_cost'];
				$invoiceParams['total_amount'] = $params['total_cost'];
				$invoiceParams['date'] = $params['start_date'];
				$invoiceParams['status'] = 'unpaid';
				$invoiceParams['discount_amount'] = '0';
				$invoiceParams['notes'] = $params['notes'] ?? '';
				$invoiceParams['currency_code'] = $params['currency_code'] ?? '$';
				$addInvoice = $InvoiceController->addInvoice($invoiceParams);
				$redirect = '/invoice/'.$addInvoice->code;
			}
			
			return $save
            ? array('success'=>1, 'result'=>translate('Added'), 'redirect'=> $redirect)
            : array('success'=>0, 'result'=>translate('Error'), 'error'=>1);


        } catch (Exception $e) {
            return array('error'=>$e->getMessage());
        }
	
	}



	/**
	 * Update item to database
	 * 
	 * @return [] 
	*/
	public function update() 
	{

	}

	/**
	 * Delete item from database
	 * 
	 * @return [] 
	*/
	public function delete() 
	{

		

	}


	/**
	 * Cancel subscription of Customer
	 * 
	 * @return [] 
	*/
	public function cancel() 
	{
		
		
	}


	/**
	 * Validate if customer canceling 
	 * His valid subscription
	 */
	public function validateCancel($params) 
	{
		// if (empty($params['item_id']))
		// 	throw new \Exception(translate('Item is required'), 1);
			
		// $item = $this->repo->find($params['item_id']);

		// if (empty($item))
		// 	throw new \Exception(translate('Item is invalid'), 1);
			
		// if (empty($this->app->customer->customer_id))
		// 	throw new \Exception(translate('Login first'), 1);
		
		// if (($item->customer_id != $this->app->customer->customer_id))
		// 	throw new \Exception(translate('Not authorized'), 1);

	}

	
}
