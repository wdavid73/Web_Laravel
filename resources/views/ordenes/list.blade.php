@section('title' , "Listado de Ordenes del Dia")
@extends('layouts.layout')
@section('content')
    
    <h1>Listado de Ordenes del Dia</h1>
   <div> 
        {{-- <p>{{$ordenes}}</p>
        <p>{{$platos}}</p>
        <p>{{$orden_plato}}</p> --}}
    </div>
    <form action="" method="GET">
            <label for="">Fecha del Dia: </label>
            <input type="date" placelholder="Fecha del Dia" name="fechaDia">
            <button type="submit" class="btn btn-success">Filtrar</button>
    </form>
    @forelse ($ordenes as $orden)

    @if ($orden->fecha ===  '1970-06-18')
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>numMesas</th>
                    <th>Plato</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orden_plato as $op)
                    <tr>
                    <th>{{$op->id}}</th>
                    <th>
                        @if ( $orden->fecha === '1970-06-18')
                            {{$orden->fecha}}
                        @endif
                    </th>
                    <th>
                        @forelse ($ordenes as $orden)
                            @if ($orden->id == $op->orden_id)
                                {{$orden->numMesa}}
                            @endif
                        @empty
                        @endforelse
                    </th>
                    <th>
                        @forelse ($platos as $plato)
                            @if ($plato->id == $op->plato_id)
                                {{$plato->nombre}}
                            @endif
                        @empty
                        @endforelse
                    </th>
                    <th>
                        {{$op->valor}}
                    </th>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
        @endif
    @empty
    
@endforelse

@endsection