<?php

namespace App\Modules\NLP\Controllers;

// Load Schema class
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Http;
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
        $query = $this->service->tableSchema('staff').',';  
        $query .= $this->service->tableSchema('tasks').', ';  
        $query .= $this->service->tableSchema('projects');  
        
        // Get response from python flask at http://127.0.0.1:5000
        // $response =  file_get_contents('http://127.0.0.1:5000');
        // echo $response;

        return view('nlp::list', compact('user','query'));
    }

    public function generateText(Request $request)
    {
        try {
            
            $user = Auth::user();

            $response = $this->service->generateText($request->message, $request->model);

            $result = preg_replace('/\*\*(.+)\*\*/sU', '<b>$1</b>', is_array($response) ? json_encode($response) : $response);


            return nl2br(  $result );
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage());
        }
    }

    public function generateTextTwoInputs(Request $request)
    {
        try {
            $response = Http::withHeaders([
                'Content-Type' => 'application/json'
            ])->post('http://127.0.0.1:5000/t5', [
                'query' => $request->question,
                'schema' => $request->context,
                'model'=> $request->model,
            ]);
            return $response->json();

            $user = Auth::user();

            $response = $this->service->generateTextTwoInputs($request->question, $request->context, $request->model);

            $result = preg_replace('/\*\*(.+)\*\*/sU', '<b>$1</b>', is_array($response) ? json_encode($response) : $response);


            return nl2br(  $result );

        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage());
        }
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
