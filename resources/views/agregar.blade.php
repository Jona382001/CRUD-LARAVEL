@extends('layout/layout')
@section('tituloPage',"Crear")

@section('contenido')

<div class="card">
    <div class="card-header">
      Nueva persona
    </div>
    <div class="card-body">
   
      <p class="card-text">
        <form action="{{route('personas.store')}}" method="POST">
          @csrf
            <label for="">
                Nombre
            </label>

            <input type="text" name="nombre" id="" class="form-control" required>
            <label for="">
                Apellido
            </label>

            <input type="text" name="apellido" id="" class="form-control" required>
            <label for="">
                Nacimiento
            </label>

            <input type="date" name="nacimiento" id="" class="form-control" required>

            <br>
            <button class="btn btn-primary"> Agregar</button>
            <a href="{{route('personas.index')}}" class="btn btn-warning">Regresar</a>
        </form>
      </p>
     
    </div>
  </div>

@endsection