<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @mixin IdeHelperCategory
 */
class Category extends Model
{
    public function vehicule(){
        return $this->hasMany(Vehicule::class);
    }

    use HasFactory;

    protected $fillable = [
        "name",
        'description'
    ];
}
