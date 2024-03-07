<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperReservationItem
 */
class ReservationItem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vehicule() {
        return $this->belongsTo(Vehicule::class);
    }

    public function reservation(){
        return $this->belongsTo(Reservation::class);
    }
}
