<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'nombre',
        'apellidos',
        'email',
        'password',
        'id_rol',
        'id_area'
    ];


    public function getRol($idUsuario)
    {
        return $this->select('u.id_rol, u.id_area, u.nombre as usuario, r.nombre as rol, a.nombre as area, 
                          r.puede_leer, r.puede_editar, r.puede_escribir, r.puede_eliminar')
            ->from('users as u')
            ->join('roles as r', 'r.id = u.id_rol')
            ->join('areas as a', 'a.id = u.id_area')
            ->where('u.id', $idUsuario)
            ->get()
            ->getRowArray();
    }
}
