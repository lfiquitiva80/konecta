<div class="modal fade" id="crear_usuario">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               
                <h4 class="modal-title">CREAR USUARIO</h4>

                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

                <!--  -->


                {!! Form::open(['route' => 'usuario.store', 'method'=>'POST','id'=>'formUserCreate', 'enctype' => 'multipart/form-data']) !!}

                 


                 <div class="form-group">
                    <label for="id">Nombre</label>
                    {!! Form::text('name', null,['class' => 'form-control', 'placeholder' => 'Nombre completo','name'=>'name']) !!}
                </div>

                <div class="form-group">
                    <label for="id">Email</label>
                    {!! Form::text('email', null,['class' => 'form-control', 'placeholder' => 'Email','name'=>'email']) !!}

                </div>
                <div class="form-group">
                    <label for="id">Contraseña </label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <label  for="password-confirm">Confirmar Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmar Contraseña">
                </div>
                <div class="form-group">
                    <label for="id">Perfil de Usuario</label>

                    {!! Form::select('perfil_usuario', $perfil,null, ['class' => 'form-control','name'=>'perfil_usuario' ]) !!}

                </div>



         

                <div class="form-group">
                    <label for="id">Activo</label>
                    {!! Form::select('activo',[ '1'=>'Activo', '0' =>'Inactivo'],null,['class'=> 'form-control','id' => 'activo','name'=>'activo'] )!!}
                </div>


                <center><button type="submit" class="btn btn-primary" >Guardar</button>
                    <button type="reset" class="btn btn-danger">Borrar</button></center><p>

                        {!! Form::close() !!}


                    </div>
                </div>

            </div>
        </div>
