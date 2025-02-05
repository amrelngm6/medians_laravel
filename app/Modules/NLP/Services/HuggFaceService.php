<?php

namespace App\Modules\NLP\Services;

use App\Modules\NLP\Models\NLPChat;
use App\Models\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use DeepseekClient;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class HuggFaceService
{

    protected $client;

    protected $deepseekClient;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api-inference.huggingface.co/',
            'headers' => [
                'Authorization' => 'Bearer ' . env('HUGGINGFACE_API_KEY'),
            ],
        ]);

        $this->deepseekClient = new Client([
            'base_uri' => 'https://api.deepseek.com/v1/',
            'timeout'  => 30,
            'headers' => [
                'Authorization' => 'Bearer ' . env('DEEPSEEK_API_KEY'),
            ],
        ]);
    }

    public function saveRecord(string $text, $model)
    {
        
        $user = Auth::user();

        $save = NLPChat::firstOrCreate([
            'business_id' => $user->business_id ?? 0,
            'user_id' => $user->id(),
            'user_type' => get_class($user),
            'description' => $text,
            'model_name' => $model,
        ]);

        return $save;
    }
    
    public function analyzeText(string $text, $model = 'google/gemma-2-2b-it')
    {
        
        $save = $this->saveRecord($text, $model);

        $response = $this->client->post("models/$model", [
            'json' => ['inputs' => $text],
            
            'options' => [
                'use_cache' => true,
                'wait_for_model' => true, // Wait if the model is loading
            ],
        ]);

        $res = json_decode($response->getBody()->getContents(), true);

        $update = $save->update([
            'reply' => $response->getBody()->getContents()
        ]);

        return $res[0]['generated_text'] ?? 'No data';
    }
    
    public function generateText(string $text, $model = '')
    {
       
        $save = $this->saveRecord($text, $model);

        try {
                
            // $model = 'google/gemma-2-2b-it';
            // $model = 'deepset/roberta-base-squad2';
            // $model = 'openai-community/gpt2-large';
            $response = $this->client->post("models/$model", [
                'json' => ['inputs' => $text  , 
                        'options' => [
                            'use_cache' => true,
                            'wait_for_model' => true, // Wait if the model is loading
                        ]],
                
            ]);

            // Handle errors
            $formatedResponse = $this->formatResponse($response, $text);
            $result = preg_replace('/\*\*(.+)\*\*/sU', '<b>$1</b>', (is_array($formatedResponse) || is_object($formatedResponse)) ? json_encode($formatedResponse) : $formatedResponse);
            
            $update = $save->update([
                'reply' => $result
            ]);
                
            return $result;
            
        } catch (\Throwable $th) {
            $update = $save->update([
                'reply' => $response->getBody()->getContents()
            ]);
            return $th->getMessage();
        }

    }
    
    public function translateText(string $text, $model = '')
    {
        $save = $this->saveRecord($text, $model);

        try {
                
            $response = $this->client->post("models/$model", [
                'json' => ['inputs' => $text  , 
                    'options' => [
                        'use_cache' => true,
                        'wait_for_model' => true, // Wait if the model is loading
                    ]],
            ]);
            
            // Handle errors
            $responseText = json_decode($response->getBody()->getContents(), true)[0]['translation_text'] ?? '';
            
        } catch (\Throwable $th) {
            $update = $save->update([
                'reply' => json_encode($response->getBody()->getContents())
            ]);
            return $th->getMessage();
        }

        $update = $save->update([
            'reply' => $responseText
        ]);
            
        return $responseText;
    }


    
    public function generateImage(string $text, $model = '')
    {
        $save = $this->saveRecord($text, $model);

        $response = $this->client->post("models/$model", [
            'inputs' => $text  , 
        ]);

        $filename = 'generated-' . Str::random(10) . '.png';
        
        // Store the image in Laravel's storage
        Storage::disk('local')->put("images/{$filename}", $response->getBody()->getContents());

        $save->update([
            "reply"=> asset("storage/images/{$filename}")
        ]);

        // Return the direct file URL
        return  '<img src="'.asset("storage/images/{$filename}").'" />';

    }


    public function extractTextFromImage($imagePath, $model = '')
    {
        
        $save = $this->saveRecord($imagePath, $model);
     
        $image = base64_encode(file_get_contents($imagePath));

        $response = $this->client->post("models/$model", [
            'json' => ['inputs' => $image  , 
                    'image' => $image,
                    'options' => [
                        'use_cache' => true,
                        'wait_for_model' => true, // Wait if the model is loading
                    ]],
        ]);
    
        // Decode the response
        $caption = json_decode($response->getBody(), true);

        return response()->json([
            'caption' => $caption[0]['generated_text'],
        ]);
    }

    
    public function generateImageFromImage(string $text, string $imagePath, $model = '')
    {
        $user = Auth::user();

        $save = NLPChat::firstOrCreate([
            'business_id' => $user->business_id ?? 0,
            'user_id' => $user->id(),
            'user_type' => get_class($user),
            'description' => $text,
            'model_name' => $model,
        ]);

        $response = $this->client->post("models/$model", [
            'inputs' => $text  , 
            'image' => base64_encode(file_get_contents($imagePath))
        ]);

        $filename = 'generated-' . Str::random(10) . '.png';
        
        // Store the image in Laravel's storage
        Storage::disk('local')->put("images/{$filename}", $response->getBody()->getContents());

        $save->update([
            "reply"=> asset("storage/images/{$filename}")
        ]);

        // Return the direct file URL
        return  '<img src="'.asset("storage/images/{$filename}").'" />';

    }



    
    public function generateTextTwoInputs(string $text, string $context, $model = '')
    {
        $response = $this->client->post("models/$model", [
            'json' => ['inputs' => [
                        'question' => $text,
                        'context' => $context,
                    ]  , 
                    // 'parameters' => [
                    //     'max_length' => 100,
                    // ],
                    'options' => [
                        'use_cache' => true,
                        'wait_for_model' => true, // Wait if the model is loading
                    ]],
            
        ]);
        
        return $response->getBody()->getContents();
    }




    /**
     * Format response
     */
    public function formatResponse($response, $text = '')
    {
        
        try {
            
            $responseText = json_decode($response->getBody()->getContents(), true)[0]['generated_text'];

            preg_match('/\[(.*?)\]/s', $responseText, $matches);

            if (!empty($matches[0])) {
                // Decode the JSON-like string into a PHP array
                $jsonContent = str_replace([",  ]", ",\n  \n]"], "]", str_replace( "\n", "", $matches[0])); // The full match, including brackets
                $array = json_decode($jsonContent, true);
            
                // Check if decoding was successful
                if (json_last_error() === JSON_ERROR_NONE) {
                    return $array; // Output the array
                } else {

                    // Step 1: Fix the JSON structure
                    $fixedJsonResponse = preg_replace_callback(
                        '/"task":\s*"(.*?)",\s*"sub_task":\s*"(.*?)"/s',
                        function ($matches) {
                            // Wrap the task and sub_task into an object
                            return json_encode([
                                "task" => $matches[1],
                                "sub_task" => $matches[2],
                            ]);
                        },
                        $jsonContent
                    );

                    // Step 2: Decode the fixed JSON string
                    $decodedArray = json_decode($fixedJsonResponse, true);

                    // Step 3: Check for errors
                    if (json_last_error() === JSON_ERROR_NONE) {
                        return $decodedArray; // Output the fixed array
                    } else {
                        return "";
                    }
                }
            }


        } catch (\Throwable $th) {
            
            $responseText = 'Error:  ' . $th->getMessage().' '. $response->getBody()->getContents();
        }
        return trim(str_replace([$text, '```json ', '```', '. json '], '', $responseText), "`");
    }

    /**
     * Query DeepSeek API
     */
    public function queryDeepSeek(string $text)
    {
        
        try {

            $deepseek = app(DeepseekClient::class);

            // Another way, with customization
            $response = $deepseek
                ->query('Hello deepseek, how are you ?', 'system')
                ->query('Hello deepseek, my name is PHP ', 'user')
                ->withModel("deepseek-chat")
                ->setTemperature(1.5)
                ->run();

            return $response;

            // $response = $this->deepseekClient->post('chat', [
            //     'headers' => [
            //         'Authorization' => 'Bearer ' . env('DEEPSEEK_API_KEY'),
            //         'Accept' => 'application/json',
            //     ],
            //     'max_tokens' => 100,
            //     'json' => [
            //         'model' => 'deepseek-chat',
            //         'messages' => [
            //             [
            //                 'role' => 'system',
            //                 'content' => 'You are a helpful assistant.'
            //             ],
            //             [
            //                 'role' => 'user',
            //                 'content' => $text
            //             ]
            //         ],
            //         'stream' => false
            //     ]
            // ]);

            // return json_decode($response->getBody(), true);

        } catch (RequestException $e) {
            // Log error and handle exception
            Log::error('DeepSeek API Error: ' . $e->getMessage());
            
            return [
                'error' => 'API request failed',
                'details' => $e->getResponse() 
                    ? $e->getResponse()->getBody()->getContents()
                    : 'No response'
            ];
        }
    }



    public function tableSchema($table)
    {
        $columns = DB::select('DESCRIBE '.$table);
        $query = $table.'(';     
        foreach ($columns as $column) {
            $query .= $column->Field.' '.$column->Type.', ';
        }
        $query .= $table.') ';   

        return $query;
    }
}
