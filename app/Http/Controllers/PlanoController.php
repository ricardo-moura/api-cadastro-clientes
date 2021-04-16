<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plano;

class PlanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(['message'=>null,'data'=> Plano::all()],200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plano = new Plano;
        $plano->plano = $request->input('plano');
        $plano->mensalidade = $request->input('mensalidade');
        $plano->save();

        return response()->json(['message' => 'Plano cadastrado', 'data' => $plano], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plano $plano)
    {
        return response()->json(['message' => null, 'data' => $plano], 200);
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
        $plano = Plano::find($id);
        $plano->plano = $request->input('plano');
        $plano->mensalidade = $request->input('mensalidade');
        $plano->save();

        return response()->json(['message' => 'Plano atualizado', 'data' => $plano], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plano = Plano::find($id);

        $plano->delete();

        return response()->json(null, 204);
    }
}
