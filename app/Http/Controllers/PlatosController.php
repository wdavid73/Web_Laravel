<?php

namespace App\Http\Controllers;

use App\Models\Plato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PlatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::all();
        //$platos = DB::table('platos')->get();

        return view('platos.index' , compact('platos'));
    }

    public function principalView()
    {
        return view('platos.platos');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('platos.create');
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

        //validaciones
        if(empty($data['plato_nombre'])) {
            return redirect('/platos/create')->withErrors([
                'plato_nombre' => 'el Campo nombre del plato es obligatorio',
                
            ])->withInput();
        }
        if(empty($data['plato_valor'])) {
            return redirect('/platos/create')->withErrors([
                'plato_valor' => 'el Campo valor del plato es obligatorio',
                
            ])->withInput();
        }


        //Agregar a la base de datos
        Plato::create([
            'nombre' => $data['plato_nombre'],
            'valor' => $data['plato_valor']
        ]);

        return redirect('/platos/index');
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
