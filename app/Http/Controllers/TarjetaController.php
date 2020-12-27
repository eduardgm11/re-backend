<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTarjetaRequest;
use App\Http\Requests\UpdateTarjetaRequest;
use App\Tarjeta;
use Illuminate\Http\Request;
use App\Gaveta;

class TarjetaController extends Controller
{
    //GET
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //GET
        if($request->has('buscaTarjeta')){
            $tarjeta = Tarjeta::where('id_tarjeta', 'like', '%'. $request->buscaTarjeta.'%')
                ->orWhere('gaveta', $request->buscaTarjeta)
                ->get();
        }else{
            $tarjeta =Tarjeta::all();
        }
        return $tarjeta;
    }

    private function CargaPDF($file){
        $nombrearchivo = time() . "-" . $file->getOriginalExtension();
        $file->move(public_path('PDF'), $nombrearchivo);
        return $nombrearchivo;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateTarjetaRequest $request)
    {
        //POST
        $input = $request->all();
        if($request->has('PDF'))
            $input['PDF'] = $this->CargaPDF($request->PDF);

        Tarjeta::create($input);
        return response()->json([
            'res' => true,
            'message' => 'Registro creado'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Tarjeta
     */
    public function show(Tarjeta $tarjeta)
    {
        //

        return $tarjeta;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(UpdateTarjetaRequest $request, Tarjeta $tarjeta)
    {
        //PUT
        $input = $request->all();
        if($request->has('PDF'))
            $input['PDF'] =$this->CargaPDF($request->PDF);
        $tarjeta->update($input);
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
        //DELETE
        Tarjeta::destroy($id);
        return response()->json([
            'res' => true,
            'message' => 'Registro borrado'
        ], 200);
    }
}
