<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrdenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ordenes = Orden::all();
        //$ordenes = DB::table('ordenes')->get();
        return view('ordenes.index' , compact('ordenes'));
    }

    public function principalView(){
        return view('ordenes.ordenes');
    }
    public function create()
    {
        return view('ordenes.create');
    }
    public function list(Request $request)
    {
        $data = $request->all();
        
        /*---- Obtencion de datos de la table ------*/
        $ordenes = Orden::all();
       /*  $ordenes = Orden::all()->where('estado' , 'C');
        $ordenes = Orden::all()->where('estado' , 'N'); */

        $platos = Plato::all();
        $orden_plato = DB::table('orden_plato')->get();

        return view('ordenes.list' , compact( 'ordenes' , 'platos' , 'orden_plato' , 'data'));
    }

    public function buscarMesa()
    {
        $ordenes = Orden::all();
        //$ordenes = DB::table('ordenes')->get();
        return view('/ordenes/buscarMesa');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show(Orden $ordenes)
    {
        return view('/ordenes/show' , compact('ordenes'));
    }
   
    public function info(Request $request)
    {
        $data = $request['numMesa'];
        
        $platos = Plato::all();
        /* dd($platos); */
        $ordenes = Orden::all();
        /* dd($ordenes); */

        $orden_plato = DB::table('orden_plato')->get();
        /* dd($orden_plato); */
        
        return view('/ordenes/info' , compact( 'ordenes' , 'platos' , 'orden_plato' , 'data'));
    }

    public function cierreOrden(Request $request)
    {
        $request->all();
        return redirect('/ordenes/index');
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = $request->all();

        //Validacion 
        if(empty($data['fecha_orden'])) {
            return redirect('/ordenes/create')->withErrors([
                'fecha_orden' => 'el Campo fecha de orden es obligatorio',
            ])->withInput();
        }
        if(empty($data['numMesa_orden']) ) {
            return redirect('/ordenes/create')->withErrors([
                'numMesa_orden' => 'el Campo numero de mesa es obligatorio',
            ])->withInput();
        }
        
        //mandar datos a la base de datos
        Orden::create([
            'fecha' => $data['fecha_orden'],
            'numMesa' =>$data['numMesa_orden'],
            'estado' => 'N'
        ]);

        return redirect('/ordenes/index')->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Orden $ordenes)
    {
        return view('ordenes/edit' , ['ordenes' => $ordenes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Orden $ordenes)
    {
        $data = request()->validate([
            'fecha' => 'required',
            'numMesa' => 'required'
        ]);

        $ordenes->update($data);
        return redirect('ordenes.show' , ['ordenes' => $ordenes]);
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
