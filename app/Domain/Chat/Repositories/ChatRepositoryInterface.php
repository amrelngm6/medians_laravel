<?php
namespace App\Domain\Chat\Repositories;

interface ChatRepositoryInterface
{
    public function getMessagesByRoom(int $roomId);
    public function storeMessage(array $data);
}
