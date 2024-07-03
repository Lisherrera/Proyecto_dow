<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Usuario extends Model
{
    use HasFactory;

    //nombre de la tabla
    protected $table = 'usuarios';

    //relacion con arriendo
    public function arriendos():HasMany{
        return $this->hasMany(Arriendo::class);
    }
    
    //relacion con perfil
    public function perfil():BelongsTo{
        return $this->belongsTo(Perfil::class);
    }
}
