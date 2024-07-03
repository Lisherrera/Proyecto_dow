<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tipo extends Model
{
    use HasFactory;

    //nombre de tabla
    protected $table = 'tipos';

    //relacion con vehiculo
    public function vehiculo():HasMany{
        return $this->hasMany(Vehiculo::class);
    }
    
}
