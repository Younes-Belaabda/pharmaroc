<?php

namespace App\Notifications;


use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class SendMessage extends Notification
{
    public function via($notifiable)
    {
        return [TelegramChannel::class];
    }

    public function toTelegram($notifiable)
    {
        // $url = url('/invoice/' . $this->invoice->id);

        return TelegramMessage::create()
            // Optional recipient user id.
            // ->to($notifiable->telegram_user_id)
            ->to(env('TELEGRAM_USER_ID'))
            // Markdown supported.
            ->content("**يونس بلعابدة**")

            // // (Optional) Blade template for the content.
            // // ->view('notification', ['url' => $url])

            // // (Optional) Inline Buttons
            ->button('View Invoice', 'https://laravel.com');
            // ->button('Download Invoice', $url);
    }
}
