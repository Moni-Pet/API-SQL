<?php

namespace App\Notifications;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AppointmentCancelledNotification extends Notification implements ShouldBroadcast, ShouldQueue
{
    use Queueable;
    

    /**
     * Create a new notification instance.
     */
    public function __construct(public Appointment $appointment)
    {
         $this->appointment = $appointment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['database'];
    }

    protected function formattedDate()
    {
        return Carbon::parse($this->appointment->date)->format('d/m/Y');
    }

    public function toDatabase($notifiable)
    {
        return [
            'type' => 'appointment_cancelled',
            'appointment_id' => $this->appointment->id,
            'message' => "Tu cita del día {$this->formattedDate()} ha sido cancelada.",
        ];
    }

    /**
     * Get the mail representation of the notification.
     */
   /* public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    } */

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    /* public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    } */
}
