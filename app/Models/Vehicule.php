<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{

    protected $fillable = [
        "name",
        "price",
        "matricule",
        "year"
    ];

    use HasFactory;

    public function category () {
        return $this->belongsTo(Category::class);
    }

    public function marque () {
        return $this->belongsTo(Marque::class);
    }

    public function galerie () {
        return $this->belongsTo(Galeries::class);
    }
}
