<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehiculo extends Model
{
    use HasFactory;

    //nombre de la tabla
    protected $table = 'vehiculos';

    //relacion con tipo
    public function tipo():BelongsTo{
        return $this->belongsTo(Tipo::class);
    }
}
