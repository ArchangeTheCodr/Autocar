<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReservationItem extends Model
{
    use HasFactory;

    protected $fillable = [ 
        'start_date',
        'end_date',
        'quantity',
        'vehicule_id',
    ];

    public function vehicule() {
        return $this->belongsTo(Vehicule::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
