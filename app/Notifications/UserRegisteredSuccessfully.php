<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredSuccessfully extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
      $user = $this->user;
        return (new MailMessage)

                    ->subject($user->name. 'خطوات بسيطة لتقعيل حسابكم في حافظة المواقع')
                    ->greeting(sprintf('مرحبا %s', $user->name))
                    ->line('يسرنا في حافظة المواقع أن نرحب بكم في موقعنا المتواضع ونرجو منكم تفعيل الحساب من خلال النقر على "تفعيل الآن"')
                    ->action('تفعيل الحساب', Route('activate.user', $user->activation_code))
                    ->line('شكرا لاستخدامكم حافظة المواقع');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
