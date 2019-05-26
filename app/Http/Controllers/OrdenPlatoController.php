<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orden;
use App\Models\Plato;
use Illuminate\Support\Facades\DB;

class OrdenPlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ordenes = Orden::all();
        $platos = Plato::all();
        $orden_plato = DB::table('orden_plato')->get();

       return view('orden_plato.index' , compact('ordenes' , 'platos' , 'orden_plato'));

    }
    public function principalView()
    {
       return view('orden_plato.orden_plato');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $platos = Plato::all();
        $ordenes = Orden::all()->where('estado' , 'N');
        return view('orden_plato.create' , compact('platos' , 'ordenes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* -------- Obtencion de informacion ----------- */
        $data = request()->all();
        $id_plato = $data['plato'];
        $id_orden = $data['orden'];
        $cantidad_platos = $data['cantidadPlato'];
        $plato = Plato::find($id_plato);
        $valor = $plato->valor * $cantidad_platos;
        /* $orden = Orden::find($id_orden);
        $plato->ordenes()->sync($id_orden);
        $orden->platos()->sync($id_plato); */

        /*---- Registro de Informacion en la BD -------*/
        DB::table('orden_plato')->insert([
            'plato_id' => $id_plato,
            'orden_id' => $id_orden,
            'cantidad' => $cantidad_platos,
            'valor' => $valor
        ]);

        return redirect ('orden_plato/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
