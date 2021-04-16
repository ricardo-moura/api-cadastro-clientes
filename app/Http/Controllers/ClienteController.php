<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Cliente::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->estado = $request->input('estado');
        $cliente->cidade = $request->input('cidade');
        $cliente->data_nascimento = $request->input('data-nascimento');
        $cliente->save();

        return response()->json($cliente, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nome = $request->input('nome');
        $cliente->email = $request->input('email');
        $cliente->telefone = $request->input('telefone');
        $cliente->estado = $request->input('estado');
        $cliente->cidade = $request->input('cidade');
        $cliente->data_nascimento = $request->input('data-nascimento');
        $cliente->save();

        return response()->json($cliente, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente = Cliente::find($id);

        $cliente->delete();

        return response()->json(null, 204);
    }
}
