<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paise extends Model
{
    public function getRouteKeyName()
    {
        return 'pai_descripcion';
    }
    protected $guarded = [];

}
