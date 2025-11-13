
$(document).ready(function () {

    // Inicializa la tabla
    new DataTable('#table-roles', {
        responsive: true,
        ordering: true,
        searching: true,
        pageLength: 25,
        order: [[0, 'asc']],
        language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "No se encontraron resultados",
            info: "Mostrando página _PAGE_ de _PAGES_",
            infoEmpty: "No hay registros disponibles",
            infoFiltered: "(filtrado de _MAX_ registros totales)",
            search: "Buscar:",
            paginate: {
                first: "Primero",
                last: "Último",
                next: "Siguiente",
                previous: "Anterior"
            }
        }
    });
});

function createRol() {
    $('#addRol').modal('show')
}

/* ============================================================
   VALIDAR Y GUARDAR FORMULARIO CREAR ROL
   ============================================================ */
function validateCreateRol() {

    // Si ya está inicializado el validador, solo valida
    if ($("#formRolCreate").data("validator")) {
        if ($("#formRolCreate").valid()) {
            saveRol(); // ejecuta el guardado solo si es válido
        }
        return;
    }

    // Método personalizado para validar al menos un checkbox
    $.validator.addMethod("atLeastOne", function () {
        return (
            $("#leer").is(":checked") ||
            $("#editar").is(":checked") ||
            $("#actualizar").is(":checked") ||
            $("#eliminar").is(":checked")
        );
    }, "Selecciona al menos un permiso.");

    // Inicializar validación
    $("#formRolCreate").validate({
        errorElement: "span",
        errorClass: "text-danger mt-1 d-block",
        rules: {
            nombreRol: { required: true },
            descripcionRol: { required: true },
            leer: { atLeastOne: true } // 👈 usamos la regla personalizada
        },
        messages: {
            nombreRol: { required: "Por favor, ingresa el nombre del rol." },
            descripcionRol: { required: "Por favor, escribe una descripción para el rol." },
            leer: { atLeastOne: "Selecciona al menos un permiso." }
        },
        highlight: function (element) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        },
        errorPlacement: function (error, element) {
            if (element.attr("name") === "leer") {
                error.appendTo("#error-permisos");
            } else {
                error.insertAfter(element);
            }
        }
    });

    // Ejecutar validación manual
    if ($("#formRolCreate").valid()) {
        saveRol();
    }
}

/* ============================================================
   FUNCIÓN AJAX PARA GUARDAR EL ROL
   ============================================================ */
function saveRol() {
    const form = $("#formRolCreate");

    const data = {
        nombreRol: form.find("#nombreRol").val(),
        descripcionRol: form.find("#descripcionRol").val(),
        permisos: {
            leer: form.find("#leer").is(":checked") ? 1 : 0,
            editar: form.find("#editar").is(":checked") ? 1 : 0,
            actualizar: form.find("#actualizar").is(":checked") ? 1 : 0,
            eliminar: form.find("#eliminar").is(":checked") ? 1 : 0
        }
    };

    console.log("📤 Enviando al servidor:", data); // 🔍 DEBUG

    $.ajax({
        url: base_url + "/admin/roles/store",
        type: "POST",
        data: data,
        dataType: "json",
        beforeSend: function () {
            console.log("⏳ Enviando rol...");
        },
        success: function (response) {
            console.log("✅ Respuesta del servidor:", response);

            if (response.success) {
                // Cerrar modal *antes* de mostrar el SweetAlert para evitar que lo tape
                try { $('#addRol').modal('hide'); } catch (e) { }

                // Mostrar alerta de éxito
                Swal.fire({
                    title: "¡Rol creado!",
                    text: "El rol se ha guardado correctamente.",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                    confirmButtonColor: "#3085d6",
                    timer: 2000,
                    timerProgressBar: true
                }).then(() => {
                    // Limpiar formulario
                    $("#formRolCreate")[0].reset();
                    location.reload();
                });
            } else {
                // Mostrar alerta de advertencia si el backend devuelve success=false
                Swal.fire({
                    title: "Atención",
                    text: response.message || "No se pudo guardar el rol.",
                    icon: "warning",
                    confirmButtonText: "Revisar"
                });
            }
        },
        error: function (xhr, status, error) {
            console.error("❌ Error AJAX:", error);

            Swal.fire({
                title: "Error",
                text: "Ocurrió un error al guardar el rol. Intenta nuevamente.",
                icon: "error",
                confirmButtonText: "Cerrar"
            });
        }
    });

}


// Edit

function editRol(id) {
    $('#editRol').modal('show');

    $.ajax({
        url: base_url + "admin/roles/show",
        type: 'POST',
        dataType: 'json',
        data: { id: id },
        success: function (response) {
            console.log("✅ Rol recibido:", response);

            const rol = response.data.rol;

            // Campos de texto
            $('#editidRol').val(rol.id);
            $('#editnombreRol').val(rol.nombre);
            $('#editdescripcionRol').val(rol.descripcion);

            // Checkboxes (1 = true, 0 = false)
            $('#editleer').prop('checked', rol.puede_leer == "1");
            $('#editeditar').prop('checked', rol.puede_editar == "1");
            $('#editactualizar').prop('checked', rol.puede_escribir == "1");
            $('#editeliminar').prop('checked', rol.puede_eliminar == "1");
        },
        error: function (xhr, status, error) {
            console.error("❌ Error AJAX:", error);
        }
    });
}

function validateEditRol() {
    // Si ya está inicializado el validador, solo valida
    if ($("#formRolEdit").data("validator")) {
        if ($("#formRolEdit").valid()) {
            updateRol(); // ejecuta el guardado solo si es válido
        }
        return;
    }

    // Método personalizado para validar al menos un checkbox
    $.validator.addMethod("atLeastOne", function () {
        return (
            $("#editleer").is(":checked") ||
            $("#editeditar").is(":checked") ||
            $("#editactualizar").is(":checked") ||
            $("#editeliminar").is(":checked")
        );
    }, "Selecciona al menos un permiso.");

    // Inicializar validación
    $("#formRolEdit").validate({
        errorElement: "span",
        errorClass: "text-danger mt-1 d-block",
        rules: {
            editnombreRol: { required: true },
            editdescripcionRol: { required: true },
            editleer: { atLeastOne: true }
        },
        messages: {
            editnombreRol: { required: "Por favor, ingresa el nombre del rol." },
            editdescripcionRol: { required: "Por favor, escribe una descripción para el rol." },
            editleer: { atLeastOne: "Selecciona al menos un permiso." }
        },
        highlight: function (element) {
            $(element).addClass("is-invalid");
        },
        unhighlight: function (element) {
            $(element).removeClass("is-invalid");
        },
        errorPlacement: function (error, element) {
            if (
                element.attr("name") === "editleer" ||
                element.attr("name") === "editeditar" ||
                element.attr("name") === "editactualizar" ||
                element.attr("name") === "editeliminar"
            ) {
                error.appendTo("#error-permisos");
            } else {
                error.insertAfter(element);
            }
        }
    });

    // Ejecutar validación manual
    if ($("#formRolEdit").valid()) {
        updateRol();
    }
}

function updateRol() {
    const form = $("#formRolEdit");

    const data = {
        id: form.find("#editidRol").val(), // 👈 asegúrate de tener un input hidden con el id del rol
        nombreRol: form.find("#editnombreRol").val(),
        descripcionRol: form.find("#editdescripcionRol").val(),
        permisos: {
            leer: form.find("#editleer").is(":checked") ? 1 : 0,
            editar: form.find("#editeditar").is(":checked") ? 1 : 0,
            actualizar: form.find("#editactualizar").is(":checked") ? 1 : 0,
            eliminar: form.find("#editeliminar").is(":checked") ? 1 : 0
        }
    };

    console.log("📤 Enviando actualización:", data);

    $.ajax({
        url: base_url + "admin/roles/update",
        type: "POST",
        data: data,
        dataType: "json",
        beforeSend: function () {
            console.log("⏳ Actualizando rol...");
        },
        success: function (response) {
            console.log("✅ Respuesta del servidor:", response);

            if (response.success) {
                // Cerrar modal antes de mostrar la alerta para que no lo cubra
                try { $('#editRol').modal('hide'); } catch (e) { }

                Swal.fire({
                    title: "¡Rol actualizado!",
                    text: "El rol se ha modificado correctamente.",
                    icon: "success",
                    confirmButtonText: "Aceptar",
                    timer: 2000,
                    timerProgressBar: true
                }).then(() => {
                    $("#formRolEdit")[0].reset();
                    location.reload();
                });
            } else {
                Swal.fire({
                    title: "Atención",
                    text: response.message || "No se pudo actualizar el rol.",
                    icon: "warning",
                    confirmButtonText: "Revisar"
                });
            }
        },
        error: function (xhr, status, error) {
            console.error("❌ Error AJAX:", error);

            Swal.fire({
                title: "Error",
                text: "Ocurrió un error al actualizar el rol.",
                icon: "error",
                confirmButtonText: "Cerrar"
            });
        }
    });
}

function deleteRol(id) {
    const idRol = parseInt(id);
    Swal.fire({
        title: '¿Eliminar rol?',
        text: 'Esta acción no se puede deshacer.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, eliminar',
        cancelButtonText: 'Cancelar'
    }).then((result) => {
        if (!result.isConfirmed) return;

        $.ajax({
            url: base_url + 'admin/roles/delete',
            type: 'POST',
            data: {
                id: idRol
            },
            dataType: 'json',
            success: function (response) {
                console.log('Respuesta delete:', response);

                if (response && response.success) {
                    Swal.fire({
                        title: '¡Eliminado!',
                        text: response.message || 'El rol se eliminó correctamente.',
                        icon: 'success',
                        confirmButtonText: 'Aceptar'
                    });
                } else {
                    Swal.fire({
                        title: 'Error',
                        text: (response && response.message) ? response.message : 'No se pudo eliminar el rol.',
                        icon: 'error',
                        confirmButtonText: 'Cerrar'
                    });
                }
            },
            error: function (xhr, status, error) {
                console.error('❌ Error AJAX delete:', error);
                Swal.fire({
                    title: 'Error',
                    text: 'Ocurrió un error al eliminar el rol. Intenta nuevamente.',
                    icon: 'error',
                    confirmButtonText: 'Cerrar'
                });
            }
        });
    });
}




