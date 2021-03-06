<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        @section('title' , "Registrar Ingrediente")

    </head>
    <body>
            @extends('layouts.layout')  
            @section('content')

            
               <div class="container mt-5">
                    <h1>Registrar Ingrediente</h1>        
                    @if ($errors->any())    
                        <div class="alert alert-danger mb-2 col-7">
                            <h6>Porfavor Corregir estos errores:</h6>                       
                        </div>
                     @endif
                    

               <form action="{{url('/ingredientes/registrar')}}" method="POST">
                {{ csrf_field() }}        
                    <div class="form-group">
                        <input name="ingrediente_nombre" type="text" class="form-control mt-2 col-5" placeholder="Nombre del Ingrediente" value="{{ old('ingrediente_nombre') }}"  required>
                            @if ($errors->has('ingrediente_nombre'))
                                <p>{{ $errors->first('ingrediente_nombre')}}</p>
                            @endif
                        <input name="ingrediente_proveedor" type="text" class="form-control mt-2 col-5" placeholder="Nombre del Proveedor" value="{{ old('ingrediente_proveedor') }}" required>
                            @if ($errors->has('ingrediente_proveedor'))
                                <p>{{ $errors->first('ingrediente_proveedor')}}</p>
                            @endif
                        <button type="submit" class="btn btn-primary mt-2">Guardar Ingrediente</button>
                    </div>
                </form>
                <a href="/ingredientes/index"> Ver todos los Ingredientes</a><br>
                <a href="/ingredientes"> Volver</a>
                </div>
            @endsection   
       
    </body>
</html>