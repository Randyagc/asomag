<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Import_detalle;

class Cliente extends Model
{
    protected $guarded = [];

    public function impdet(){
        return $this->hasMany(Import_detalle::class, "imd_cliente_id");
    }

    /** Ejemplo de Trabajar conn SCOPES en Eloquent */
    function scopeProveedor($query, $tipcli){
        return $query->where("cli_tipo_cliente","=",$tipcli);
    }

}


