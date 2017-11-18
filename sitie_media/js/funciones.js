
function editar_user(id) {
    var id_user_edit = id;
    //agregamos un valor al elemento html
    document.getElementById('id_user_edit').value = id_user_edit;
    //enviamos el formulario que se llama editar
    document.editar.submit();
}

function eliminar_user(id) {

    if (confirm("Seguro que deseas eliminarlo el id: " + id)) {
        var id_user_delete = id;
        document.getElementById('id_user_delete').value = id_user_delete;
        document.eliminar.submit()
    } else {
        alert('No lo eliminandos id: ' + id);

    }


}
function renta_user(id) {

    if (confirm("Seguro que deseas rentar el id: " + id)) {
        var id_user = id;
        document.getElementById('id_user_rentar').value = id_user;
        document.rentar.submit()
    } else {
        alert('No lo eliminandos id: ' + id);

    }


}
//**** modulo renta********
function agregar_renta(id) {

    if (confirm("Seguro que deseas Agregar Renta")) {
        var id_user_rentar = id;
        document.getElementById('id_user_rentar').value = id_user_rentar;
        document.agregar.submit()
    } else {
        alert('No lo eliminandos id: ' + id);

    }
}

function terminar_renta(id) {

    if (confirm("Seguro que deseas Terminar Renta")) {
        var form = id;
        document.getElementById('form').value = form;
        document.terminar.submit()
    } else {
        alert('No lo eliminandos id: ' + id);

    }

}
function pagada_renta(id) {

    if (confirm("Seguro que ya se pago la Renta")) {
        var id_pagado = id;
        document.getElementById('id_pagado').value = id_pagado;
        document.pagado.submit()
    } else {
        alert('No se actualizo el pago id: ' + id);

    }

}
function agregaVenta() {

      alert("En proceso Amor!!!!!!");

}



//***********************************