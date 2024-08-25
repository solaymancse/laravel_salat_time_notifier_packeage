<?php

namespace Solayman\SalatNotifier\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\SlackMessage;

class SalatNotification extends Notification
{
    protected $salat;

    public function __construct($salat)
    {
        $this->salat = $salat;
    }

    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage)
            ->content('It\'s almost time for ' . $this->salat->name . ' prayer. Don\'t forget to pray!');
    }
}
