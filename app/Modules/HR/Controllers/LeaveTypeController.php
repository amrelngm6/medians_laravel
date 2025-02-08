<?php

namespace App\Modules\HR\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\HR\Services\LeaveTypeService;

class LeaveTypeController extends Controller
{
    protected $service;

    public function __construct(LeaveTypeService $service)
    {
        $this->service = $service;
    }



    
}