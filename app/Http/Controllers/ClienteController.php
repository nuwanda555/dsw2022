<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

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

    public function store(Request $request){

        $datos=$request->all();

        
        Cliente::create($datos);

        return redirect("/clientes");
    }


}
