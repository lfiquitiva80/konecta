<div class="modal fade" id="pe_create">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Crear un nuevo cliente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                    {!! Form::open(['route' => 'clientes.store', 'method'=>'POST', 'id'=>'form_indicador_create']) !!}


                    <div class="form-group">
                        <label for="id">Nombre</label>
                        <input type="text" class="form-control names" name="nombre" placeholder="Digite el Nombre" required>

                    </div>

                    <div class="form-group">
                        <label for="id">Documento</label>
                        <input type="text" class="form-control"  name="documento" placeholder="Digite el Documento">

                    </div> 

                    <div class="form-group">
                        <label for="id">Correo</label>
                        <input type="email" class="form-control"  name="correo" placeholder="Digite el correo">

                    </div>
                    
                    <div class="form-group">
                        <label for="id">Dirección</label>
                        <input type="text" class="form-control" name="dirección" placeholder="Digite la Dirección">

                    </div>
                </div>
                     <center><button type="submit" class="btn btn-primary" >Enviar</button>
                    <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    {!! Form::close() !!}            
                </div>
            </div>
        </div>
    </div>