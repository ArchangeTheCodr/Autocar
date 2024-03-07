<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index(){
        $reservation = Reservation::with('items')->where('user_id', auth()->id())->latest('created_at')->first();
        $reservation->total_price = 0;
        return view('reservation.index', [
            'reservation' => $reservation
        ]);
    }

    public function create(Reservation $reservation) {
        return view('reservation.create')->with('reservation',$reservation);
    }

    public function store(Request $request, Reservation $reservation){
        // Recuperation du prix total ayant ete calculer en session
        $reservation->total_price = session()->get('total_price');
        $reservation->save();
        //suppression du prix total de la session
        session()->forget('total_price');
        // creation d'une reservation vide apres validation de l'active
        Reservation::create(['user_id' => auth()->id()]);
        return redirect()->route('vehicule.index')->with('success', 'Reservation valider avec succes'); 
    }
}
