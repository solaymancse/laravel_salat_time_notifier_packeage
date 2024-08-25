<?php

namespace Solayman\SalatNotifier\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use Solayman\SalatNotifier\Models\Salat;
use Solayman\SalatNotifier\Notifications\SalatNotification;

class NotifySalatCommand extends Command
{
    protected $signature = 'salat:notify';

    protected $description = 'Send Salat notifications to Slack';

    public function handle()
    {
        $salats = Salat::all();

        foreach ($salats as $salat) {
            Notification::route('slack', env('SLACK_WEBHOOK_URL'))
                ->notify(new SalatNotification($salat));
        }

        $this->info('Salat notifications sent to Slack.');
    }
}
