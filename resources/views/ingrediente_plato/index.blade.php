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
        @section('title' , "Todos los Registros Ingrediente - Plato")

    </head>
    <body>
            @extends('layouts.layout')   
            @section('content')
               <div class="container mt-5">
                    <h2>Todos los Registros Ingrediente - Plato</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Ingrediente</th>
                            <th>Plato</th>
                            <th>Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($ingrediente_plato as $ingre_plat)
                        <tr>
                            <th>
                               {{$ingre_plat->id}}
                            </th>
                            <th>
                                @forelse ($ingredientes as $ingrediente)
                                    @if ($ingrediente->id == $ingre_plat->ingrediente_id)
                                        {{$ingrediente->nombre}}
                                    @endif
                                @empty
                                    
                                @endforelse

                            </th>
                            <td>
                                @forelse ($platos as $plato)
                                    @if ($plato->id == $ingre_plat->plato_id)
                                        {{$plato->nombre}}
                                    @endif
                                @empty
                                    
                                @endforelse
                            </th>
                        </td>
                            <td>
                                {{$ingre_plat->cantidad}}
                            </td>
                        </tr>
                        @empty
                            <p>No hay Registros</p>
                        @endforelse
                    </tbody>
                </table>
                <a href="{{url('/ingrediente_plato')}}">Volver a Ingrediente -> Plato</a>
                </div>

                
            @endsection   
       
    </body>
</html>

