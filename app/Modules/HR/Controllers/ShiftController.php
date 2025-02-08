<?php

namespace App\Modules\HR\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use App\Modules\HR\Services\ShiftService;

class ShiftController extends Controller
{
    protected $service;

    public function __construct(ShiftService $service)
    {
        $this->service = $service;
    }



    
}