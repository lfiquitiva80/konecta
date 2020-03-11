@extends('master')


@section('content')



  <div class="panel-body">

<div class="container">

<div class="panel panel-default">
<h4><b><center>REGISTROS DE USUARIOS</h4></b></center>
<a class="btn btn-info" data-toggle="modal" href='#crear_usuario'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Crear Usuario</a>

  @include('usuario.create')


   @include('usuario.edit')

   <hr>

   {!! Form::open(['route' => 'usuario.index', 'method'=>'GET', 'Class'=>'navbar-form navbar-right']) !!}
<!--<form class="navbar-form navbar-right" role="search">-->
  <div class="form-group">
    <input type="text" class="form-control " placeholder="Buscar por el nombre del usuario" name="name" >
  </div>
  <button type="submit" class="btn btn-default">Consultar</button>
{!! Form::close() !!}


<p>
<div class="table-responsive">
<table class="table table-hover" >
  <thead>
    <tr>
      <td>  id  </td>
      <td>  Nombre</td>
      <td>  email</td>
      <td>  Avatar </td>
      <td>  Perfil Usuario</td>
      
      <td>  Activo</td>
      <td>  Acción </td>



    </tr>
  </thead>
  <tbody>

  @foreach($usuario as $row)
    <tr>

          <td>{{$row->id}}</td>
                     <td>{{$row->name}}</td>
          <td>{{$row->email}}</td>
          <td>@if ($row->avatars == 'default.jpg')
            <img src="{{ asset('img/avatars/8.jpg')}}" style="width:50px; height:50px;  border-radius:50%">


            @else
            <img src="{{asset($row->avatar)}}"  style="width:50px; height:50px;  border-radius:50%">

            @endif</td>
          <td>{{$row->perfil->descripcion_perfil  }}</td>
      
          <td>@if ($row->activo==1)

               <label class="switch switch-lg switch-3d switch-primary">
                            <input type="checkbox" class="switch-input" checked="">
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>
              @else
              <label class="switch switch-lg switch-3d switch-primary">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label"></span>
                            <span class="switch-handle"></span>
                          </label>@endif</td>


          <td><a    data-toggle="modal" data-target="#editar_usuario"   data-name="{{$row->name}}"   data-perfil_usuario ="{{$row->perfil_id}}" data-email="{{$row->email}}"  data-id="{{$row->id}}" data-activo="{{$row->activo}}"
          data-avatar="{{$row->avatars}}"
   
           class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"> Edición</i></a></td> <td>@include('usuario.destroy')</td>

    </tr>
  </tbody>

  @endforeach


</table>
</div>

<center>{{ $usuario->links() }}</center>

</div>

</div>
</div>



@endsection
