<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicule extends Model
{

    protected $fillable = [
        "name",
        "price",
        "matricule",
        "year"
    ];
    
    use HasFactory;
}
