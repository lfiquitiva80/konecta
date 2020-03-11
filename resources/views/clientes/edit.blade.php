<div class="modal fade" id="editar_clientes">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
                <h4 class="modal-title">Actualizar el cliente</h4>

                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form class="" action="{{route('clientes.update', 'id' )}}"  id="ctoseditar" method="post"  >
                    {{method_field('patch')}}
                    {{csrf_field()}}
                    <input type="hidden" id="id" name="id" value="">



                    <div class="form-group">
                        <label for="id">Nombre</label>
                        <input type="text" class="form-control names" id="nombre" name="nombre" placeholder="Digite el Nombre" required>

                    </div>

                    <div class="form-group">
                        <label for="id">Documento</label>
                        <input type="text" class="form-control" id="documento" name="documento" placeholder="Digite el Documento" required>

                    </div>

                    <div class="form-group">
                        <label for="id">Correo</label>
                        <input type="email" class="form-control" id="correo" name="correo" placeholder="Digite lel correo" required>

                    </div>

                    <div class="form-group">
                        <label for="id">Dirección</label>
                        <input type="text" class="form-control" id="dirección" name="dirección" placeholder="Digite la dirección" required>

                    </div>
                </div>
                     

                    <center><button type="submit" class="btn btn-primary" >Enviar</button>
                        <button type="button" class="btn btn-default "data-dismiss="modal" >Close</button></center><p>
                    
                    </form>             
                </div>
            </div>
        </div>
    </div>