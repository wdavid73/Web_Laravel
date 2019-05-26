<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       
    <title>Ingrediente Plato</title>

</head>
<body>
        @extends('layouts.layout')    

        @section('content')
        <div class="container mt-5">
                <h1>Todos los registros</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre del Plato</th>
                        <th>Fecha de la Orden</th>
                        <th>Numero de Meas</th>
                        <th>Estado de la Orden</th>
                        <th>cantidad</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orden_plato as $o_p)
                        <tr>
                            <th>
                                {{$o_p->id}}
                            </th>
                            <th>
                                    @forelse ($platos as $plato)
                                        @if ($plato->id == $o_p->plato_id)
                                            {{$plato->nombre}}
                                        @endif
                                    @empty
                                        
                                    @endforelse
                            </th>
                            <th>
                                    @forelse ($ordenes as $orden)
                                        @if ($orden->id == $o_p->orden_id)
                                            {{$orden->fecha}}
                                        @endif
                                    @empty
                                        
                                    @endforelse
                            </th>
                            <th>
                                    @forelse ($ordenes as $orden)
                                        @if ($orden->id == $o_p->orden_id)
                                            {{$orden->numMesa}}
                                        @endif
                                    @empty
                                        
                                    @endforelse
                            </th>
                            <th>
                                    @forelse ($ordenes as $orden)
                                        @if ($orden->id == $o_p->orden_id)
                                            {{$orden->estado}}
                                        @endif
                                    @empty
                                        
                                    @endforelse
                            </th>
                            <th>
                                {{$o_p->cantidad}}
                            </th>
                            <th>
                                {{$o_p->valor}}
                            </th>
                        </tr>
                    @empty
                        <th>NO hay Registros</th>
                    @endforelse
                    <th></th>
                </tbody>
            </table>
            
            <a class="ml-5" href="{{url('/ordenes/index')}}"><button class="btn btn-success mt-2">Volver a Registro de Ordenes</button></a>
            <a class="ml-5" href="{{url('/platos/index')}}"><button class="btn btn-success mt-2">Volver a Registro de Platos</button></a>
        </div>
        {{-- <p>{{$ordenes}}</p><br>
        <p>{{$platos}}</p><br>
        <p>{{$orden_plato}}</p><br> --}}
            
        @endsection
        
</body>
</html>