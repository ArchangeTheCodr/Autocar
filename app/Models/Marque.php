<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperMarque
 */
class Marque extends Model
{

    protected $fillable = [
        "name",
    ];
    
    public function vehicule(){
        return $this->hasMany(Vehicule::class);
    }

    use HasFactory;
}
