<?php

use App\Models\UserModel;

if (!function_exists('usuarioLogeado')) {

    /**
     * Retorna el usuario actualmente logueado (objeto del modelo)
     *
     * @return array|null
     */
    function usuarioLogeado()
    {
        $session = session();
        $id = $session->get('id');

        if (!$id) {
            return null;
        }

        $userModel = new UserModel();

        return $userModel->find($id);
    }
}
