<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use NotificationChannels\Twitter\TwitterChannel;
use Illuminate\Notifications\Messages\MailMessage;
use NotificationChannels\Twitter\TwitterStatusUpdate;
use NotificationChannels\FacebookPoster\FacebookPosterPost;
use NotificationChannels\FacebookPoster\FacebookPosterChannel;

class PostPublished extends Notification
{

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return [
            TwitterChannel::class,
            FacebookPosterChannel::class,
        ];
    }

    public function toTwitter($post)
    {
        return new TwitterStatusUpdate(
            'Join us for: ' . $post->title . ' on ' . $post->tweetDate() . ' #' . $post->city . ' ' . $post->url()
        );
    }

    public function toFacebookPoster($post)
    {
        return (new FacebookPosterPost(
            'Join us for: ' . $post->title . ' on ' . $post->tweetDate() . ' #' . $post->city
        ))->withLink($post->url());
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', 'https://laravel.com')
                    ->line('Thank you for using our application!');
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
