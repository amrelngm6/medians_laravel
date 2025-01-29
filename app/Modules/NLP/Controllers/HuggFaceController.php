<?php

namespace App\Modules\NLP\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\Auth;

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

    public function generateText(Request $request)
    {
        $user = Auth::user();

        $response = $this->service->generateText($request->message, $request->model);

        return nl2br($response);
    }

    /**
     * DeepSeek API call
     */
    public function deepSeek(Request $request)
    {
        $user = Auth::user();

        $response = $this->service->queryDeepSeek($request->message);
        
        return $response['generated_text'] ?? $response;
    }

}
