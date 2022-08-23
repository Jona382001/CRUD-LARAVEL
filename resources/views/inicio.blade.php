@extends('layout/layout')

@section('titlePage','CRUD LARAVEL')

@section('contenido')

<div class="row">
    <div class="col-md-12">
        <div class="card-header">
            Mi primer CRUD
          </div>
         <div class="card-body">
            <div class="row">
                <div class="col-sm-12">
                    @if ($mensaje=Session::get('success'))
                        
                    @endif
                    <div class="alert alert-success" role="alert">
                        {{$mensaje}}
                      </div>
                </div>
            </div>
          <h5 class="card-title">
              Listado
          </h5>
          <p>
              <a href="{{route('personas.create')}}" class="btn btn-primary">Nueva persona</a>
          </p>
          <hr>
    
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

                         @foreach ($datos as $item)
                           
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->apellido}}</td>
                            <td>{{$item->nacimiento}}</td>
                            <td>
                                <form action="{{route('personas.edit',$item->id)}}" method="GET">
                                    <button class="btn btn-warning">Editar</button>
                                </form>
                            </td>
                            <td>
                                <form action="{{route('personas.show',$item->id)}}"  method="GET">
                                    <button class="btn btn-warning">Borrar</button>
                                </form>   
                            </td>

                        </tr>
                         @endforeach
                      </tbody>
                  </table>
          </div>
         </div>
        </div>    </div>
</div>

   



@endsection