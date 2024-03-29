<?php

namespace App\Notifications;

use Cache;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Str;

class EmailVerificationNotification extends Notification implements ShouldQueue
{
    use Queueable;

    // 邮箱验证
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
        // 使用 Laravel 内置的 Str 类生成随机字符串的函数，参数就是要生成的字符串长度
        $token = Str::random(16);
        // 往缓存中写入这个随机字符串，有效时间为 1800 秒。
        Cache::set('email_verification_'.$notifiable->email, $token, 1800);
        $url = route('email_verification.verify', ['email' => $notifiable->email, 'token' => $token]);
        return (new MailMessage)
                    ->greeting($notifiable->name . '您好：')
                    ->subject('注册成功，请验证您的邮箱')
                    ->line('请点击下方链接验证您的邮箱')
                    ->action('验证', $url);
    }

    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
