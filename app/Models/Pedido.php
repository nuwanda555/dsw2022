<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    //un pedido tiene unos detalles
    public function detalles(){
        return $this->hasMany(Detalle::class);
    }

    //un pedido tiene un empleado
    public function empleado(){
        return $this->belongsTo(Empleado::class);
    }
}
