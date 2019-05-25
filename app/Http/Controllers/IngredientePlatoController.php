<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;
use App\Models\Plato;
use Illuminate\Support\Facades\DB;

class IngredientePlatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $ingredientes = Ingrediente::all();
       $platos = Plato::all();
       $ingrediente_plato = DB::table('ingrediente_plato')->get();

       return view('ingrediente_plato.index' , compact('ingredientes' , 'platos' , 'ingrediente_plato'));

    }

    public function principalView()
    {
       return view('ingrediente_plato.ingrediente_plato');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredientes = Ingrediente::all();
        $platos = Plato::all();
        return view('ingrediente_plato.create' , compact('ingredientes' , 'platos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = request()->all();
       $id_ingrediente = $data['ingrediente'];
       $id_plato = $data['plato']; 
       $cantidad_p = $data['cantidad']; 
    
       //dd($data);

       
       $ingrediente = Ingrediente::find($id_ingrediente);
       $plato = Plato::find($id_plato);

       
       $ingrediente->platos()->sync($id_plato);
       $plato->ingredientes()->sync($id_ingrediente);
    
      /*  $cantidad = IngredientePlato::find($cantidad_p);
        $cantidad->attach($cantidad); */

        return redirect('ingrediente_plato/index');
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
