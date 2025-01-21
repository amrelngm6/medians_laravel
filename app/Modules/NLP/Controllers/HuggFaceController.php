<?php

namespace App\Modules\NLP\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

use Swapinvidya\HuggingFaceClient\HuggingFaceClient;
use App\Modules\NLP\Services\HuggFaceService;

class HuggFaceController extends Controller
{
    protected $service;

    public function __construct(HuggFaceService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        return view('nlp::list');
    }

}
