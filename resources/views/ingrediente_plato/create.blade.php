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
        @extends('layout')    

        @section('content')
            <h1>Relacionar Ingrediente con Plato</h1>
        <form action=" {{url('/ingrediente_plato/registrar')}} " method="POST">
            {{ csrf_field() }}  
            <div class="row">
                <div class="col">
                      <!--Platos-->
                      <div class="card">
                            <div class="card-body">
                                    <h4 class="card-title">Platos</h4>
                                    <label for="" class="mt-2">Selecciones un Plato:</label>
                                    <select name="plato" id="" class="form-control">
                                            @foreach ($platos as $plato)
                                                <option value="{{$plato->id}}">{{$plato->nombre}}</option>
                                            @endforeach
                                    </select>
                                    <input type="submit" class="mt-2 btn btn-success" value="Agregar ingrediente al Plato">
                            </div>
                        </div>
                </div>
                <div class="col">
                  
                    <!--Ingredientes-->
                    <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ingredientes</h4>
                                <label for="" class="mt-1">Seleccione un Ingrediente:</label>
                                <select name="ingrediente" id="" class="form-control">
                                        @foreach ($ingredientes as $ingrediente)
                                            <option value="{{$ingrediente->id}}">{{$ingrediente->nombre}}</option>
                                        @endforeach
                                </select>
                                <input type="number" name="cantidad" class="form-control mt-2" placeholder="Cantidad del Ingrediente" required>
                            </div>
                        </div>
                </div>
            </div>
        </form>
        <a class="ml-5" href="{{url('/platos/index')}}">Volver a Registro de platos</a><br>
        <a class="ml-5" href="{{url('/ingredientes/index')}}">Volver a Registro de ingredientes</a><br>    
            
        @endsection
        
</body>
</html>