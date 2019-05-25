<?php

namespace App\Http\Controllers;

use App\Models\Ingrediente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IngredientesController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * listar Recursos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredientes = Ingrediente::all();
        //$ingredientes = DB::table('ingredientes')->get();
        return view('ingredientes.index', compact('ingredientes'));
    }

    public function principalView()
    {
        return view('ingredientes.ingredientes');
    }
    /**
     * Show the form for creating a new resource.
     * 
     *Mostramos el formulario para crear un nuevo recurso

     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingredientes.create');
    }



    /**
     * Store a newly created resource in storage.
     * 
     *guardar el recurso creado por create en la base de datos

     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
        $data = $request->all();

        //validacion
        if(empty($data['ingrediente_nombre'])) {
            return redirect('/ingredientes/create')->withErrors([
                'ingrediente_nombre' => 'el Campo nombre del ingrediente es obligatorio',
            ])->withInput();
        }

        if(empty($data['ingrediente_proveedor'])) {
            return redirect('/ingredientes/create')->withErrors([
                'ingrediente_proveedor' => 'el Campo nombre del proveedor es obligatorio'
            ])->withInput();
        }

        //mandar los datos a la base de datos
        Ingrediente::create([
            'nombre' => $data['ingrediente_nombre'],
            'proveedor' => $data['ingrediente_proveedor']
        ]);
        

        return redirect('/ingredientes/index');
    }

    /**
     * Display the specified resource.
     * 
     * mostramos un recurso especifico
     *
     * @param  int  $codigo
     * @return \Illuminate\Http\Response
     */
    public function show(Ingrediente $ingredientes)
    {
        return view('/ingredientes/show', compact('ingredientes'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * editar un recurso especifico
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingrediente $ingredientes)
    {
        return view('/ingredientes/edit', ['ingredientes' => $ingredientes]);
    }

    /**
     * Update the specified resource in storage.
     * 
     * guardar los cambios que se hagan en edit
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Ingrediente $ingredientes)
    {
        
        $data = request()->validate([
            'nombre' => 'required',
            'proveedor' => 'required'    
        ]);
        
        $ingredientes->update($data);
        return redirect('ingredientes.show' , ['ingredientes' => $ingredientes]);
    }

    /**
     * Remove the specified resource from storage.
     * 
     * eliminamos un recurso
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
