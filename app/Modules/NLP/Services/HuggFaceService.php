<?php

namespace App\Modules\NLP\Services;

use Swapinvidya\HuggingFaceClient\HuggingFaceClient;
use App\Models\Auth;

class HuggFaceService
{
    
    protected $client;

    public function __construct(HuggingFaceClient $client)
    {
        $this->client = $client;
    }
    
    public function generateText()
    {
        return $this->client->generateText('gpt2', 'Write a short story about a hero.');
    }
}
