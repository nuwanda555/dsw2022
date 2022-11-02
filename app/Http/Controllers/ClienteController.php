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
    }

    public function store(Request $request){

        $datos=$request->all();

        
        Cliente::create($datos);

        return redirect("/clientes");
    }

    public function listadoPdf(){
        $clientes = Cliente::all();
        $pdf = \PDF::loadView("clientes.listado_pdf",compact("clientes"));

        return $pdf->stream('listado.pdf');
    }

    public function edit($id){
        $cliente = Cliente::find($id);
        return view("clientes.edit",compact("cliente"));
    }

    public function update(Request $request, $id){
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return redirect("/clientes");
    }


}
