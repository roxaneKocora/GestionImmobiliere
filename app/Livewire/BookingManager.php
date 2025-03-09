<?php
namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;

class BookingManager extends Component
{
    public $propertyId, $startDate, $endDate;

    public function book()
    {
        $this->validate([
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',
        ]);

        Booking::create([
            'user_id' => Auth::id(),
            'property_id' => $this->propertyId,
            'start_date' => $this->startDate,
            'end_date' => $this->endDate,
        ]);

        session()->flash('message', 'Réservation effectuée avec succès.');
    }

    public function render()
    {
        return view('livewire.booking-manager');
    }
}
