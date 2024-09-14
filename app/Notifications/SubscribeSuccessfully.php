<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SubscribeSuccessfully extends Notification
{
    use Queueable;

    protected $plan;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($plan_id)
    {
        $stripe = new \Stripe\StripeClient(\Config::get('services.stripe.secret'));
        $this->plan = is_array($plan_id) ? $stripe->plans->retrieve($plan_id['planId']) : $stripe->plans->retrieve($plan_id);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array
     */
    public function via(mixed $notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail(mixed $notifiable)
    {
        return (new MailMessage())
                    ->subject('subscribed Successfully!')
                    ->line('You have subscribed successfully!')
                    ->line('Subscription Plan:'.$this->plan->nickname)
                    ->line('Thank you for using Genealogia!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array
     */
    public function toArray(mixed $notifiable)
    {
        return [

        ];
    }
}
