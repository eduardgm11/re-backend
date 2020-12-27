<?php

namespace App\Http\Controllers;

use App\Gaveta;
use App\Http\Requests\CreateTarjetaRequest;
use App\Http\Requests\UpdateGavetaRequest;
use App\Tarjeta;
use Illuminate\Http\Request;

class GavetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if($request->has('muestraGavetas')){
            Gaveta::all();
        }else{
            return response()->json([
                'res' => false,
                'message' => 'Error'
            ], 400);
        }

        if($request->has('buscaGaveta')){
            $gaveta = Tarjeta::where('gaveta_id', 'like', '%'. $request->buscaGaveta.'%')
                ->orWhere('gaveta', $request->buscaGaveta)
                ->get();
        }else{
            return response()->json([
                'res' => false,
                'message' => 'No se encontro el registro'
            ], 404);
        }
        return $gaveta;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTarjetaRequest $request)
    {
        //
        $input = $request->all();
        Gaveta::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Gaveta
     */
    public function show(Gaveta $gaveta)
    {
        //
        return $gaveta;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateGavetaRequest $request, Gaveta $gaveta)
    {
        //
        $input = $request->all();
        $gaveta->update($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro actualizado'
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        //
        Gaveta::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro borrado'
        ], 200);
    }
}
