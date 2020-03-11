$('#editar_pe').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var PE = button.data('pe')
var cliente_id = button.data('cliente_id')
var Atencion = button.data('atencion')
var emailcontacto = button.data('emailcontacto')
var contacto_ot = button.data('contacto_ot')
var cargo = button.data('cargo')
var fecha = button.data('fecha')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #PE').val(PE);
modal.find('.modal-body #cliente_id').val(cliente_id);
modal.find('.modal-body #Atencion').val(Atencion);
modal.find('.modal-body #emailcontacto').val(emailcontacto);
modal.find('.modal-body #contacto_ot').val(contacto_ot);
modal.find('.modal-body #cargo').val(cargo);
modal.find('.modal-body #fecha').val(fecha);
})



$('#editar_clientes').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var nombre = button.data('nombre')
var documento = button.data('documento')
var correo = button.data('correo')
var direccion = button.data('direccion')
// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #nombre').val(nombre);
modal.find('.modal-body #documento').val(documento);
modal.find('.modal-body #correo').val(correo);
modal.find('.modal-body #dirección').val(direccion);

})


$('#editar_cargos').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion = button.data('descripcion')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion').val(descripcion);


})

$('#editar_uniformes').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var Item = button.data('item')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #Item').val(Item);


})


$('#editar_usuario').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget)
    var id = button.data('id')
    var name = button.data('name')
    var email = button.data('email')
    var activo = button.data('activo')
    var perfil_usuario = button.data('perfil_usuario')
    var avatar = button.data('avatar')
    // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-body #id').val(id);
    modal.find('.modal-body #name').val(name);
    modal.find('.modal-body #email').val(email);
    modal.find('.modal-body #activo').val(activo);
    modal.find('.modal-body #perfil_usuario').val(perfil_usuario);
    modal.find('.modal-body #avatar').val(avatar);
    
    
    })


$('#editar_conceptos_condiciones').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var descripcion_conceptos = button.data('descripcion_conceptos')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #descripcion_conceptos').val(descripcion_conceptos);


})



$('#editar_detalle_pe').on('show.bs.modal', function (event) {
var button = $(event.relatedTarget)
var id = button.data('id')
var pe_id = button.data('pe_id')
var cargo_id = button.data('cargo_id')
var seccion = button.data('seccion')
var num_puestos = button.data('num_puestos')
var desc_servicio = button.data('desc_servicio')
var ciudad_id = button.data('ciudad_id')
var ubicacion = button.data('ubicacion')
var detalle_condiciones_salariales = button.data('detalle_condiciones_salariales')
var dotacion_servicio = button.data('dotacion_servicio')
var unidad = button.data('unidad')
var valor_unitario = button.data('valor_unitario')
var valor_total = button.data('valor_total')
var pago_31 = button.data('pago_31')

// Extract info from data-* attributes
// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
var modal = $(this)
modal.find('.modal-body #id').val(id);
modal.find('.modal-body #pe_id').val(pe_id);
modal.find('.modal-body #cargo_id').val(cargo_id);
modal.find('.modal-body #seccion').val(seccion);
modal.find('.modal-body #num_puestos').val(num_puestos);
modal.find('.modal-body #desc_servicio').val(desc_servicio);
modal.find('.modal-body #ciudad_id').val(ciudad_id);
modal.find('.modal-body #ubicacion').val(ubicacion);
modal.find('.modal-body #detalle_condiciones_salariales').val(detalle_condiciones_salariales);
modal.find('.modal-body #dotacion_servicio').val(dotacion_servicio);
modal.find('.modal-body #unidad').val(unidad);
modal.find('.modal-body #valor_unitario').val(valor_unitario);
modal.find('.modal-body #valor_total').val(valor_total);
modal.find('.modal-body #pago_31').val(pago_31);


})