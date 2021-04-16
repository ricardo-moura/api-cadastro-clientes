<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Plano;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['message' => null, 'data' => Cliente::all()], 200);
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

        //@TODO - to fix
        // $plano = new Plano;
        // // $plano->id = $request->input('plano.id-plano');
        // $plano->plano =$request->input('plano.nome-plano');
        // $plano->mensalidade = (float) $request->input('plano.mensalidade');

        // $cliente->planos()->save($plano);

        $cliente->save();

        return response()->json(['message' => 'Cliente cadastrado', 'data' => $cliente], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        return response()->json(['message' => null, 'data' => $cliente], 200);
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

        return response()->json(['message' => 'Cliente atualizado', 'data' => $cliente], 200);
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

    // public function book_event(Request $request, Cliente $user, Event $event)
    // {
    //     $note = '';
    //     if($request->note){
    //         $note = $request->note;
    //     }
    //     if($user->events()->save($event, array('note' => $note))){
    //         return response()->json(['message'=>'User Event Created','data'=>$event],200);
    //     }
    //     return response()->json(['message'=>'Error','data'=>null],400);
    // }
}
