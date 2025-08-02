<?php

namespace App\Events;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AppointmentCancelledEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $appointment;

    /**
     * Create a new event instance.
     */
    public function __construct(Appointment $appointment)
    {
         $this->appointment = $appointment;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new PrivateChannel('App.Models.User.' . $this->appointment->user->id),
        ];
    }

    public function broadcastAs()
    {
        return 'Appointment-Alert';
    }

    public function broadcastWith()
    {
        return [
            'appointment_id' => $this->appointment->id,
            'message' => "Tu cita del día " . Carbon::parse($this->appointment->date)->format('d/m/Y') . " ha sido cancelada.",
        ];
    }
}
