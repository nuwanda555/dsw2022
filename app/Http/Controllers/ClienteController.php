<?php

namespace App\Http\Controllers;

use App\Models\Cliente;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::all(); 
        return view("clientes.index",compact("clientes"));
    }

    public function borrar($id)
    {
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect("/clientes");
    }



}