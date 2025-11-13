<div class="card p-3">
    <div class="row">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <div class="">
                <h2>Roles</h2>
                <p>Crea, edita o elimina Roles y permisos</p>
            </div>
            <button class="btn btn-primary" onclick="createRol()">Nuevo Rol</button>

        </div>
        <div class="col-12">
            <table id="table-roles" class="table table-striped">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($roles)): ?>
                        <?php foreach ($roles as $rol): ?>
                            <tr>
                                <td><?= esc($rol['nombre']) ?></td>
                                <td><?= esc($rol['descripcion']) ?></td>
                                <td>
                                    <button class="btn btn-sm btn-warning" onclick="editRol(<?php echo $rol['id']?>)">Editar</button>
                                    <button class="btn btn-sm btn-danger" onclick="deleteRol(<?php echo $rol['id']?>)">Eliminar</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" class="text-center">No hay roles registrados</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modales -->

<div class="modal fade" id="addRol" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Crear Rol</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form id="formRolCreate" novalidate>
                            <div class="mb-3">
                                <label for="nombreRol" class="form-label">Rol</label>
                                <input type="text" class="form-control" id="nombreRol" name="nombreRol">
                                <div id="rollHelp" class="form-text">Escribe el nombre del rol.</div>
                            </div>
                            <div class="mb-3">
                                <label for="descripcionRol" class="form-label">Descripción</label>
                                <textarea name="descripcionRol" id="descripcionRol" class="form-control" name="descripcionRol"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block mb-2">Permisos</label>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="leer" name="leer" value="1">
                                    <label class="form-check-label" for="leer">Leer</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="editar" name="editar" value="1">
                                    <label class="form-check-label" for="editar">Editar</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="actualizar" name="actualizar" value="1">
                                    <label class="form-check-label" for="actualizar">Actualizar</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="eliminar" name="eliminar" value="1">
                                    <label class="form-check-label" for="eliminar">Eliminar</label>
                                </div>

                                <span id="error-permisos" class="text-danger mt-1 d-block"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="validateCreateRol()">Guardar</button>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="editRol" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Editar Rol</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <form id="formRolEdit" novalidate>
                            <input type="hidden" name="editidRol" id="editidRol" >
                            <div class="mb-3">
                                <label for="editnombreRol" class="form-label">Rol</label>
                                <input type="text" class="form-control" id="editnombreRol" name="editnombreRol">
                                <div id="rollHelp" class="form-text">Modifica el nombre del rol.</div>
                            </div>
                            <div class="mb-3">
                                <label for="editdescripcionRol" class="form-label">Descripción</label>
                                <textarea name="editdescripcionRol" id="editdescripcionRol" class="form-control" name="editdescripcionRol"></textarea>
                            </div>
                            <div class="mb-3">
                                <label class="form-label d-block mb-2">Permisos</label>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="editleer" name="editleer" value="1">
                                    <label class="form-check-label" for="editleer">Leer</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="editeditar" name="editeditar" value="1">
                                    <label class="form-check-label" for="editeditar">Editar</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="editactualizar" name="editactualizar" value="1">
                                    <label class="form-check-label" for="editactualizar">Actualizar</label>
                                </div>

                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="editeliminar" name="editeliminar" value="1">
                                    <label class="form-check-label" for="editeliminar">Eliminar</label>
                                </div>

                                <span id="error-permisos" class="text-danger mt-1 d-block"></span>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" onclick="validateEditRol()">Guardar</button>
            </div>

        </div>
    </div>
</div>


<!-- Scripts -->
<script src="<?= base_url('asset/js/admin/roles.js?v=1.0') ?>"></script>