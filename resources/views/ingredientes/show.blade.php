@section('title' , "Ingredientes")
    
@extends('layout')


            @section('content')
               <div class="container mt-5">


                    <h1>Ingrediente # {{$ingredientes}} </h1>
                    
                    <a href="{{url('/ingredientes')}}">Volver a Registro de Ingredientes</a>
                </div>
            @endsection  