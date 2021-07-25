<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    //  Esta cambio es para que funcione las urls amigables, y no tan impersonales
    //  y cambia el campo por donde se hagan las búsquedas para facilitat las rutas
    public function getRouteKeyName()
    {
        return 'url';
    }
}
