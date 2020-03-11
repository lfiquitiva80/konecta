
<div class="modal fade" id="editar_usuario">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">ACTUALIZAR</h4>
      </div>
      <div class="modal-body">



        <form class="" action="{{route('usuario.update', 'id' )}}"   method="post" id="formUserEdit" enctype="multipart/form-data">

          {{method_field('patch')}}
          {{csrf_field()}}

          <input type="hidden" id="id"  name="id" value="">

      <img  id="avatar" style="width:140px; height:140px; position:absolute; top:10px; left:10px; border-radius:50%">

</a>

<br><br><br><br><br><br><br><br>
{!!   Form::file('avatar')!!}

          <div class="form-group">
            <label for="id">Nombre</label>
            {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name','id'=>'name']) !!}
          </div>

          <div class="form-group">
            <label for="id">Email</label>
            {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email','id'=>'email']) !!}

          </div>
          <div class="form-group">
            <label for="id">Contraseña </label>
            <input  type="password" class="form-control" name="password" placeholder="Contraseña" required>
          </div>

          <div class="form-group">
            <label for="id">Perfil de Usuario</label>

            {!! Form::select('perfil_id', $perfil,null, ['class' => 'form-control','name'=>'perfil_id','id'=>'perfil_usuario' ]) !!}

          </div>
         


          <div class="form-group">
            <label for="id">Activo</label>
            {!! Form::select('activo',[ ''=>'SELECCIONE','1'=>'Activo', '0' =>'Inactivo'],null,['class'=> 'form-control','id' => 'activo','name'=>'activo'] )!!}
          </div>



        



          <center><button type="submit" class="btn btn-primary" >Actualizar</button>
            <button type="button" class="btn btn-default "data-dismiss="modal" >Cerrar</button></center><p>

            </form>




          </div>
        </div>

      </div>
    </div>
