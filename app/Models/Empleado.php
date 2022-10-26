<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    //campos que se pueden asignar de forma masiva
    protected $guarded = ["id"];

    //pedidos del empleado
    public function pedidos(){
        return $this->hasMany(Pedido::class);
    }


    //pedidos no entregados
    public function pedidosNoEntregados(){
        return $this->hasMany(Pedido::class)->whereNull('fecha_entrega');
    }
}
