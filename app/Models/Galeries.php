<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperGaleries
 */
class Galeries extends Model
{
    use HasFactory;

    public function video(){
        return $this->hasOne(Videos::class);
    }

    public function images(){
        return $this->hasMany(Images::class);
    }

    public function vehicule(){
        return $this->belongsTo(Vehicule::class);
    }
}
