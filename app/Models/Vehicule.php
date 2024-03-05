<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Vehicule extends Model
{

    protected $fillable = [
        "name",
        "price",
        "matricule",
        "year"
    ];

    use HasFactory;

    //Lien avec le model category
    public function category () {
        return $this->belongsTo(Category::class);
    }

    //Lien avec le model marque
    public function marque () {
        return $this->belongsTo(Marque::class);
    }

    //Lien avec le model galerie
    public function galerie () {
        return $this->belongsTo(Galeries::class, 'galeries_id');
    }

    public function reservationItem () {
        return $this->hasOne(ReservationItem::class);
    }

    // Recuperation de toutes les images liees au vehicule
    public function getImageUrl(){
        return $this->galerie->images;
    }

    // Recuperation de la video liee au vehicule
    public function getVideoUrl(){
        return Storage::disk('public')->url($this->galerie->video->video);
    }
}
