<?php

namespace App\Notifications;

use App\Models\Reservation;
use Illuminate\Notifications\Notification;

class ReservationNotification extends Notification
{
    public $reservation;

    // Le constructeur attend un objet Reservation
    public function __construct(Reservation $reservation)
    {
        $this->reservation = $reservation;
    }

  
    public function via($notifiable)
    {
        return ['database'];  
    }

    
    public function toArray($notifiable)
    {
        return [
            'message' => 'Vous avez une nouvelle réservation pour votre trajet.',
            'reservation_id' => $this->reservation->id,
            'status' => $this->reservation->status,
        ];
    }
}
