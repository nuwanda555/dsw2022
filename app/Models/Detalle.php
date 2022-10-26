<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    use HasFactory;

    //un detalle pertenece a un pedido
    public function pedido(){
        return $this->belongsTo(Pedido::class);
    }
}
