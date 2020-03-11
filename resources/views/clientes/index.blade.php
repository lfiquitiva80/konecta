@extends('master')

@section('content')


        
        @include('sweet::alert')

       
     <div class="panel-body">

    <div class="container">

       @include('clientes.create')
       @include('clientes.edit')



   <div class="panel panel-default">
<h4><b><center>CLIENTES</h4></b></center>

<a class="btn btn-info" data-toggle="modal" href='#pe_create'><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> <i class="fa fa-plus-circle" aria-hidden="true"></i> Crear una Cliente</a>


<br><br>
  
<table id="clientes2"  class="table table-hover">
  <thead>
    <tr>
      <td>id</td>
      <td>nombre</td>
      <td>documento</td>
      <td>correo</td>
      <td>dirección</td>
    <td>  Editar </td>
<td>  Eliminar? </td>  



      
     
      
     </tr>
     </thead>
 </table>



</div>
</div>
</div>


<script type="text/javascript">

$(document).ready(function() {
    $('#clientes2').DataTable({
           "serverSide": true,
           "ajax" : "{{ url('clientesall') }}",
           
           "columns":[
{data: "id"},           
{data: "nombre"},
{data: "documento"},
{data: "correo"},
{data: "dirección"},





             {data: "botones"},
              {data: "delete"},
             
             ],
           "language": {
              "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
           },
           "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "emptyTable": "No hay datos",
            "zeroRecords": "No hay coincidencias",
            "info":false,  
            columnDefs: [
               { orderable: true, className: 'id', targets: [ 0, 1,2,3,4,5] },
               { orderable: false, targets: '_all' },
             
            ] ,



     });
});
</script>
@endsection

<br style="display: none">
