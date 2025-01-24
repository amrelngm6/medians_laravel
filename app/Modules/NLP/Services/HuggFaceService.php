<?php

namespace App\Modules\NLP\Services;

use App\Models\Auth;
use GuzzleHttp\Client;
 use Illuminate\Support\Facades\Log;

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
            'base_uri' => 'https://api.deepseek.com',
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
            'json' => ['inputs' => $text],
        ]);
        
        return json_decode($response->getBody()->getContents(), true)[0];
    }

    /**
     * Query DeepSeek API
     */
    public function queryDeepSeek(string $text)
    {
        
        try {
            $response = $this->deepseekClient->post('/chat', [
                'headers' => [
                    'Authorization' => 'Bearer ' . env('DEEPSEEK_API_KEY'),
                    'Accept' => 'application/json',
                ],
                'max_tokens' => 100,
                'json' => [
                    'model' => 'deepseek-chat',
                    'messages' => [
                        [
                            'role' => 'system',
                            'content' => 'You are a helpful assistant.'
                        ],
                        [
                            'role' => 'user',
                            'content' => $text
                        ]
                    ],
                    'stream' => false
                ]
            ]);

            return json_decode($response->getBody(), true);

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
