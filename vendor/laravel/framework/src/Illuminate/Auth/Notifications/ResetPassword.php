<?php

namespace Illuminate\Auth\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            // ->line('You are receiving this email because we received a password reset request for your account.')
            ->line('Vi ste primili ovaj email zato što ste tražili resetovanje lozinke za vaš nalog.')
            // ->action('Reset Password', route('password.reset', $this->token))
             ->action('Promena Lozinke', route('password.reset', $this->token))
            // ->line('If you did not request a password reset, no further action is required.');
            ->line('Ukoliko niste tražili resetovanje lozinke, molimo vas zanemarite ovaj email.');
    }
}
