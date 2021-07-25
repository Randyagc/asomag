<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Periodo extends Model
{
    protected $guarded = [];

        /** Ejemplo de Trabajar conn SCOPES en Eloquent */
        function scopeEstadoreg($query, $estado){
            return $query->where("per_estado","=",$estado);
        }
}
