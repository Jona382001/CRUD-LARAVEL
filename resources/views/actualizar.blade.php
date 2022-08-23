@extends('layout/layout')
@section('tituloPage',"Crear")

@section('contenido')

<div class="card">
    <div class="card-header">
      Actualizar
    </div>
    <div class="card-body">

      <p class="card-text">
        <form action="{{route('personas.update',$persona->id)}}" method="POST">
          @csrf
          @method("PUT")
            <label for="">
                Nombre
            </label>

            <input type="text" name="nombre" id="" class="form-control" required value="{{$persona->nombre}}">
            <label for="">
                Apellido
            </label>

            <input type="text" name="apellido" id="" class="form-control" required  value="{{$persona->apellido}}">
            <label for="">
                Nacimiento
            </label>

            <input type="date" name="nacimiento" id="" class="form-control" required value="{{$persona->nacimiento}}">

            <br>
            <button class="btn btn-primary"> Actualizar</button>
            <a href="{{route('personas.index')}}" class="btn btn-warning">Regresar</a>
        </form>
      </p>
     
    </div>
  </div>

@endsection