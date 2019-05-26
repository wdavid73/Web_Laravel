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
        @section('title' , "Ordenes")

    </head>
    <body>     
            @extends('layouts.layout')   
            @section('content')
               <div class="container mt-5">
                    <h1>Editar Datos Basico de la Orden</h1>

               <form action="{{url("ordenes/{$ordenes->id}")}}" method="POST">
                    {{ method_field('PUT') }}
                    {{ csrf_field() }}
                    <label for="">Editar Orden Basica</label>        
                    <div class="form-group">
                            
                    <input name="fecha_orden" type="date" class="form-control mt-2 col-5" placeholder="Fecha de la Orden" value="{{old('fecha_orden' , $ordenes->fecha)}}"required>
                    <input name="numMesa_orden" type="number" class="form-control mt-2 col-5" placeholder="Numero de la Mesa" value="{{old('numMesa_orden' , $ordenes->numMesa)}}"required>
                    <button type="submit" class="btn btn-primary mt-2">Registrar Orden</button>
                        </div>
                    </form>
                    <a href="/ordenes/index"> Todas las Ordenes</a><br>
                    <a href="{{url('/orden_plato/index')}}"><button class="btn btn-primary">Agregar Platos con la Ordenes</button></a><br>
                    <a href="/ordenes"> Volver</a><br>
                    
                </div>
            @endsection  
    </body>
</html>