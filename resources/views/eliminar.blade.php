@extends('layout/layout')
@section('tituloPage',"Eliminar")

@section('contenido')

<div class="card">
    <div class="card-header">
      Eliminar
    </div>
    <div class="card-body">
   
      <p class="card-text">
        <div class="alert alert-danger" role="alert">
            Esta seguro de eliminar este registro
            <div class="table table-responsive">
                <table class="table table-sm table-bordered">
                    <thead>
                      <tr>
                          <th>Nombre</th>
                          <th>Apellido</th>
                          <th>Nacimiento</th>
                          <th></th>
                          <th></th>

                      </tr>
                   
    
                    </thead>
                    <tbody>

                  
                         
                      <tr>
                      <td>{{$persona->nombre}}</td>
                          <td>{{$persona->apellido}}</td>
                          <td>{{$persona->nacimiento}}</td>
                         

                      </tr>
                     
                    </tbody>
                </table>

                <form action="{{route('personas.destroy',$persona->id)}}">
                  @csrf
                  @method('get')
                    <a href="{{route('personas.index')}}" class="btn btn-info">Regresar</a>
                    <button class="btn btn-danger">Eliminar</button>
                </form>
          </div>

          
      </p>
     
    </div>
  </div>

@endsection