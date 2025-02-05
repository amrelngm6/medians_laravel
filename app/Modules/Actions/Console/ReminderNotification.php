<?php

namespace App\Modules\Actions\Console;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use NotificationChannels\WebPush\WebPushMessage;
use NotificationChannels\WebPush\WebPushChannel;

class ReminderNotification extends Notification
{
    use Queueable;

    protected $task;

    public function __construct($task)
    {
        $this->task = $task;
    }

    public function via($notifiable)
    {
        return [WebPushChannel::class];
    }

    public function toWebPush($notifiable, $notification)
    {
        return (new WebPushMessage)
            ->title($this->task->name)
            ->body('You have a task due: ' . date('M d, H:i a', strtotime($this->task->date)))
            ->action('View Task', 'view_task')
            ->data(['url' => url('/tasks/' . $this->task->id)]);
    }
}