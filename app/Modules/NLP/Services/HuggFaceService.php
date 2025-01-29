<?php

namespace App\Modules\NLP\Services;

use App\Models\Auth;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use DeepseekClient;

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
    
    public function analyzeText(string $text)
    {
        $model = 'google/gemma-2-2b-it';
        $response = $this->client->post("models/$model", [
            'json' => ['inputs' => $text],
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
    
    public function generateText(string $text, $model = '')
    {

        // $model = 'google/gemma-2-2b-it';
        // $model = 'deepset/roberta-base-squad2';
        // $model = 'openai-community/gpt2-large';
        $response = $this->client->post("models/$model", [
            'json' => ['inputs' => $text  , 
                    // 'parameters' => [
                    //     'max_length' => 100,
                    // ],
                    'options' => [
                        'use_cache' => true,
                        'wait_for_model' => true, // Wait if the model is loading
                    ]],
            
        ]);
        
        return $this->formatResponse($response, $text);
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
            $responseText = 'Error: ' . $th->getMessage();
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
}
