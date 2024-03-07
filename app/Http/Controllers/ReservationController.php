<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    public function index(){
        return view('reservation.index');
    }

    public function create() {
        $reservations = Reservation::with('items')->where('user_id', auth()->id())->first();
        return view('reservation.create', [
            'reservations' => $reservations
        ]);
    }
}
