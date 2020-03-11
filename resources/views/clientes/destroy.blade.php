{!! Form::open(['route' => ['clientes.destroy', $id],'method'=>'DELETE']) !!}
    
<button class="btn btn-danger" onclick="return confirm('Esta seguro de Eliminar?')"><i class="fa fa-trash" aria-hidden="true"></i> </button>

{!! Form::close() !!}