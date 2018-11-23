<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineaDeVenta extends Model
{
    public function venta(){
        return $this->belongsTo(Venta::class);
    }
}
