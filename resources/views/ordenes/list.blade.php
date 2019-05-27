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
       
    @section('title' , "Listado de Ordenes del Dia")
</head>
<body>
        @extends('layouts.layout')
        @section('content')
    
    <h1 class ="text-center mt-2">Listado de Ordenes del Dia</h1>

    <form action="{{ route('ordenes.list') }}" method="GET" class="form-inline justify-content-center mt-4">
        <div class="form-group">    
        <label for="">Fecha del Dia: </label>
        <input type="date"  class="form-control ml-3" placelholder="Fecha del Dia" name="fechaDia" value="{{old('fechaDia')}}" required>
            <button type="submit" class="btn btn-success btn-block mt-2">Filtrar</button>
        </div>
    </form>
   <div id="table" class="container-fluid col-7 mt-5">
    @foreach ($data as $dat)
        {{--  Fecha  --}}    
            {{-- $dat --}}

        @forelse ($ordenes as $orden)

            @if ($orden->fecha === $dat )
                    <table class="table table-border table-hover table-sm table-responsive-md text-center">
                    <caption>Listado de Ordenes del {{$dat}}</caption>
                        <thead class="thead-light">
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">N° Mesa</th>
                            <th scope="col">Plato</th>
                            <th scope="col">Valor</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($orden_plato as $op)
                            <tr>{{-- Id de la Orden --}}
                                    <th>
                                        @if ($orden->id == $op->orden_id)
                                            {{$orden->id}}       
                                        @endif
                                    </th>
                                    {{-- Fecha de la Orden --}}  
                                    <td>
                                        @if ($orden->id == $op->orden_id)
                                            {{$orden->fecha}}
                                        @endif
                                    </td>
                                    {{-- N° de la Mesa --}}
                                    <td>
                                        @if ($orden->id == $op->orden_id)
                                            {{$orden->numMesa}}
                                        @endif
                                    </td>
                                    {{-- Plato --}}
                                    <td>
                                        @foreach ($platos as $plato)
                                            @if ($op->plato_id == $plato->id && $orden->id == $op->orden_id  )
                                            {{$plato->nombre}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{-- Valor de la Orden --}}
                                        @if ($orden->id == $op->orden_id)
                                            {{$op->valor}}    
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @endif
               
            @empty
        @endforelse
        <div class="alert alert-danger">
                No hay Ordenes con la fecha {{$dat}}
            </div>
    @endforeach
</div>
@endsection
</body>
</html>