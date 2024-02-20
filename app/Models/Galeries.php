<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galeries extends Model
{
    use HasFactory;

    public function video(){
        return $this->belongsTo(Videos::class);
    }

    public function images(){
        $this->hasMany(Images::class);
    }
}
