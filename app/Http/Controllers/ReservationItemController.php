<?php

namespace App\Http\Controllers;

use App\Models\ReservationItem;
use App\Models\Reservation;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationItemRequest;

class ReservationItemController extends Controller
{
    public function create($id){
        $vehicule = Vehicule::find($id);
        return view('reservationItem.create', ['vehicule' => $vehicule]);
    }

    public function store(ReservationItemRequest $request){
        //Recherche d'une reservation active sinon creation d'une nouvellle
        //avec valeur par defaut pour 'user_id' l'id du user identifier
        $reservation = Reservation::firstOrCreate(
            ['user_id' => auth()->id()], 
            ['user_id' => auth()->user()->id]
        );
        $item = ReservationItem::create($request->validated());
        $item->total_price = $request->quantity * $item->vehicule->price;
        $item->reservation_id = $reservation->id;
        $item->save();

        return redirect()->route('vehicule.index');
    }
}