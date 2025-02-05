<?php
namespace App\Modules\Actions\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;
use App\Modules\Actions\Console\ReminderNotification;
use App\Modules\Actions\Models\Reminder;


class LoadRemindersJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct() {}

    public function handle()
    {
        Log::info('Reminder Job'); 

        $reminders = Reminder::where('date', '<=', date('Y-m-d H:i:s'))->where('is_notified', 0)->get();

        
        foreach ($reminders as $reminder) {

                
            if ($reminder->user->pushSubscriptions()->exists()) {
                $reminder->user->notify(new ReminderNotification($reminder));
            } else {
                Log::error("User has no WebPush subscriptions.");
            }

            // Notification::send($reminder->user, new ReminderNotification($reminder));
            Log::info('Reminder '. json_encode($reminder)); 
            $reminder->update(['is_notified' => true]);
        }
    }
}
