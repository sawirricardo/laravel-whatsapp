<?php

namespace Sawirricardo\Whatsapp\Laravel\Channels;

use Illuminate\Notifications\Notification;
use Sawirricardo\Whatsapp\Laravel\Facades\Whatsapp;

class WhatsappChannel
{
    /** @param Notification $notification */
    public function send($notifiable, $notification)
    {
        $message = $notification->toWhatsapp($notifiable);

        Whatsapp::create()
            ->to($notifiable->whatsappNumber)
            ->message($message)
            ->send();
    }
}
