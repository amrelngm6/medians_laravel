<?php

namespace App\Modules\HR\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\HR\Services\LeaveService;

class LeaveController extends Controller
{
    protected $service;

    public function __construct(LeaveService $service)
    {
        $this->service = $service;
    }



    
}