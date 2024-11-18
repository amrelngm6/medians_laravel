<?php
namespace App\Domain\Chat\Services;

use App\Domain\Chat\Repositories\MessageRepositoryInterface;

class ChatService
{
    protected $messageRepository;

    public function __construct(MessageRepositoryInterface $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    public function getRoomMessages(int $roomId)
    {
        return $this->messageRepository->getMessagesByRoom($roomId);
    }

    public function sendMessage(array $data)
    {
        return $this->messageRepository->storeMessage($data);
    }
}
