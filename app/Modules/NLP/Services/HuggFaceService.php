<?php

namespace App\Modules\NLP\Services;

use App\Models\Auth;
use GuzzleHttp\Client;

class HuggFaceService
{

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://api-inference.huggingface.co/',
            'headers' => [
                'Authorization' => 'Bearer ' . env('HUGGINGFACE_API_KEY'),
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
    
    public function generateText(string $text)
    {
        $model = 'google/gemma-2-2b-it';
        $response = $this->client->post("models/$model", [
            'json' => ['inputs' => $text],
        ]);
    
        return json_decode($response->getBody()->getContents(), true)[0];
    }
}
