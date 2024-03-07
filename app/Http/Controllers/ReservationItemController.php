<?php

namespace App\Http\Controllers;

use App\Models\ReservationItem;
use App\Models\Reservation;
use App\Models\Vehicule;
use Illuminate\Http\Request;
use App\Http\Requests\ReservationItemRequest;
use Carbon\Carbon;

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
        )->get()->where('user_id', '=', auth()->user()->id)
        ->last();

        $item = ReservationItem::create($request->validated());
        // Recuperation des dates afin de les parser et obtenir la duree d'une reservation
        $dateD = Carbon::parse($request->start_date);
        $dateF = Carbon::parse($request->end_date);
        $duree = $dateF->diffInDays($dateD);
        $item->total_price = $request->quantity * $item->vehicule->price * $duree;
        $item->reservation_id = $reservation->id;
        $item->save();
        return redirect()->route('reservation.index');
    }

    public function edit($vehiculeId, $reservationItemId){
        $vehicule = Vehicule::find($vehiculeId);
        $item = ReservationItem::find($reservationItemId);
        return view('reservationItem.edit', [
            'vehicule' => $vehicule,
            'item' => $item
        ]);
    }

    public function update(ReservationItemRequest $request, $vehiculeId, $reservationItemId){
        $item = ReservationItem::find($reservationItemId);
        $item->update($request->validated());

        // Recuperation des dates afin de les parser et obtenir la duree d'un remboursement
        $dateD = Carbon::parse($request->start_date);
        $dateF = Carbon::parse($request->end_date);
        $duree = $dateF->diffInDays($dateD);

        // Prix total = quantite*prix_du_vehicule*duree de location
        $item->total_price = $request->quantity * $item->vehicule->price * $duree;
        $item->save();

        return redirect()->route('reservation.index');
    }

    public function destroy($vehiculeId, $reservationItemId){
        $item = ReservationItem::findOrFail($reservationItemId);
        $item->delete();
        return redirect()->route('reservation.index')->with('delete', 'item supprimer avec succes'); 
    }

}