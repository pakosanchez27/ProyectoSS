<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LogoutController extends BaseController
{
    public function logout()
    {
        $session = session();

        // Destruye todos los datos de sesión
        $session->destroy();

        // Redirige al login (ajusta la ruta según tu proyecto)
        return redirect()->to(base_url('/login'));
    }
}
