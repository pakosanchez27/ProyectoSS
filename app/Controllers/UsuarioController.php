<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UsuarioController extends BaseController
{
    public function index()
    {
        echo view('layouts/header.php');
        echo view('admin/usuarios.php');
        echo view('layouts/footer.php');
    }
}
