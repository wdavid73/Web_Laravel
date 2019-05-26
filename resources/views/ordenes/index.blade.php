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
        @section('title' , "Todas las Ordenes")

    </head>
    <body>
            @extends('layouts.layout')   
            @section('content')
               <div class="container mt-5">

                <table class="table">
                    <thead>
                        <tr>
                            <th>NumeroOrden</th>
                            <th>Fecha</th>
                            <th>numMesa</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ordenes as $orden)
                        <tr>
                                <th>{{$orden->id}}</th>
                                <td>{{$orden->fecha}}</td>
                                <td>{{$orden->numMesa}}</td>
                                <td>{{$orden->estado}}</td>
                                <td>
                                        <a href="/ordenes/{{$orden->id}}">
                                            <button class="btn btn-primary">Detalles</button>
                                        </a>
                                        <a href="/ordenes/{{$orden->id}}/edit">
                                            <button class="btn btn-success">Editar</button>
                                        </a>
                                        <a href="/ordenes/index">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </a>
                                    </td>
                                </tr>
                        @empty
                            <p>No hay Ordenes Registradas</p>
                        @endforelse
                    </tbody>
                </table>
                    <a href="{{url('/ordenes/create')}}">Volver a Registro de Ordenes</a><br>
                    <a href="{{url('/ordenes')}}">Volver a Principal</a>
                </div>

                
            @endsection   
       
    </body>
</html>