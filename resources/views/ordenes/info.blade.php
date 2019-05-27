        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
@extends('layouts.layout')
@section('title' , 'informacion de la orden')
    
@section('content')
    <div class="container-fluid w-50">
        <div class="card mt-3">
            <h2 class="card-header text-center">Informacion de la Orden</h2>
            <div class="card-body">
                    @foreach ($orden_plato as $op)
                        @forelse ($ordenes as $orden)
                            @if ($orden->id == $op->orden_id && $orden->numMesa == $data)
                                <p> Numero de Mesa :{{$data}}</p>  
                                @foreach ($platos as $plato)
                                    @if ($plato->id == $op->plato_id)
                                        <p>Nombre del Plato : {{$plato->nombre}}</p>
                                        <p>cantidad de plato : {{$op->cantidad}}</p>
                                        <p>valor del plato: {{$plato->valor}}</p>
                                        <p>valor de la Orden: {{$op->valor}}</p><hr>
                                    @endif
                                @endforeach
                                
                            @endif 
                        @empty
                        @endforelse
                    @endforeach
            </div>
        </div>
        {{-- pasamos data , platos , ordenes , orden_plato --}}
    </div>
    <div class="container-fluid w-50">
        <form action="">
            <button type="submit" class="btn btn-danger mt-2">Cerrar Orden</button>
        </form>
        <a href="/ordenes/buscarMesa"><button class="btn btn-success">Volver</button></a>
    </div>
@endsection