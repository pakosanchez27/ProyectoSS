<?php

namespace App\Controllers;

use Config\Database;
use App\Models\RolModel;
use App\Controllers\BaseController;

class RolController extends BaseController
{
    protected $rolesModel;

    public function __construct()
    {
        $this->rolesModel = new RolModel();
    }

    public function index()
    {
        $rolModel = new RolModel();
        $data['roles'] = $rolModel->findAll();

        echo view('layouts/header.php');
        echo view('admin/roles.php', $data);
        echo view('layouts/footer.php');
    }

    public function store()
    {
        // Recibir los datos del formulario
        $nombre = trim($this->request->getPost('nombreRol'));
        $descripcion = trim($this->request->getPost('descripcionRol'));
        $permisos = $this->request->getPost('permisos'); // array asociativo (leer, editar, etc.)

        // Validar datos obligatorios
        if (empty($nombre) || empty($descripcion)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'El nombre y la descripción son obligatorios.'
            ]);
        }

        // Validar al menos un permiso
        $tienePermiso = false;
        if (is_array($permisos)) {
            foreach ($permisos as $valor) {
                if ((int)$valor === 1) {
                    $tienePermiso = true;
                    break;
                }
            }
        }

        if (!$tienePermiso) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Debes seleccionar al menos un permiso.'
            ]);
        }

        // Armar el array de inserción con tus nombres de columnas reales
        $data = [
            'nombre'         => $nombre,
            'descripcion'    => $descripcion,
            'puede_leer'     => $permisos['leer'] ?? 0,
            'puede_escribir' => $permisos['editar'] ?? 0,   // ← el checkbox “editar” se guarda como “puede_escribir”
            'puede_editar'   => $permisos['actualizar'] ?? 0, // ← el checkbox “actualizar” se guarda como “puede_editar”
            'puede_eliminar' => $permisos['eliminar'] ?? 0,
        ];

        try {
            $insertId = $this->rolesModel->insert($data);

            return $this->response->setJSON([
                'success' => true,
                'message' => '✅ Rol guardado correctamente.',
                'id'      => $insertId,
                'data'    => $data
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Error al guardar: ' . $e->getMessage()
            ]);
        }
    }
    public function show()
    {
        $id = $this->request->getPost('id');
        $rol = $this->rolesModel->find($id);
        return $this->response->setJSON([
            'success' => true,
            'data' => ['rol' => $rol]
        ]);
    }

    public function update()
    {
        $id = $this->request->getPost('id');

        if (!$id) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'ID del rol no proporcionado.'
            ]);
        }

        $nombre = $this->request->getPost('nombreRol');
        $descripcion = $this->request->getPost('descripcionRol');
        $permisos = $this->request->getPost('permisos');

        $rolModel = new RolModel();

        $data = [
            'nombre'        => $nombre,
            'descripcion'   => $descripcion,
            'puede_leer'    => $permisos['leer'] ?? 0,
            'puede_editar'  => $permisos['editar'] ?? 0,
            'puede_escribir' => $permisos['actualizar'] ?? 0,
            'puede_eliminar' => $permisos['eliminar'] ?? 0,
        ];

        if ($rolModel->update($id, $data)) {
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Rol actualizado correctamente.'
            ]);
        }

        return $this->response->setJSON([
            'success' => false,
            'message' => 'No se pudo actualizar el rol.'
        ]);
    }

    public function delete()
    {
        $id = $this->request->getPost('id');

        if (empty($id) || !is_numeric($id)) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'ID inválido.'
            ]);
        }

        // Comprobar que el rol existe
        $rol = $this->rolesModel->find($id);
        if (!$rol) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Rol no encontrado.'
            ]);
        }

        $db = Database::connect();

        try {
            // Iniciar transacción
            $db->transStart();

            // Desactivar temporalmente las comprobaciones de FK en esta conexión
            // para permitir asignar id_rol = 0 (si tu esquema lo requiere).
            $db->query('SET FOREIGN_KEY_CHECKS = 0');

            // Actualizar usuarios que tienen este rol -> id_rol = 0
            $db->table('users')->where('id_rol', $id)->update(['id_rol' => 0]);

            // Eliminar el rol
            $this->rolesModel->delete($id);

            // Reactivar FK checks
            $db->query('SET FOREIGN_KEY_CHECKS = 1');

            $db->transComplete();

            if ($db->transStatus() === false) {
                throw new \Exception('La transacción falló.');
            }

            return $this->response->setJSON([
                'success' => true,
                'message' => 'Rol eliminado y usuarios actualizados.'
            ]);
        } catch (\Exception $e) {
            // Intentar reactivar FK checks si ocurrió un error
            try {
                $db->query('SET FOREIGN_KEY_CHECKS = 1');
            } catch (\Throwable $ignore) {
            }

            if (isset($db) && $db->transStatus() === true) {
                $db->transRollback();
            }

            return $this->response->setJSON([
                'success' => false,
                'message' => 'Error al eliminar rol: ' . $e->getMessage()
            ]);
        }
    }

    public function destroy()
    {
        // Alias por si algún formulario usa otro nombre
        return $this->delete();
    }
}
