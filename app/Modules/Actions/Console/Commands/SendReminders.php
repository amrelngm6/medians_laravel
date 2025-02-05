<?php

namespace App\Modules\Actions\Console\Commands;

use Illuminate\Console\Command;
use App\Modules\Actions\Jobs\LoadRemindersJob;

class SendReminders extends Command
{
    protected $signature = 'reminders:send';
    protected $description = 'Load reminders and notify users';

    public function handle()
    {
        dispatch(new LoadRemindersJob());
        $this->info('Reminders dispatched successfully!');
    }
}

