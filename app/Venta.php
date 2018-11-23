<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public function lineasVentas(){
        return $this->hasMany(LineaDeVenta::class);
    }
}
