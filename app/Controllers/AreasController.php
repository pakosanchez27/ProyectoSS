<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AreasController extends BaseController
{
    public function index()
    {
        echo view('layouts/header.php');
        echo view('admin/areas.php');
        echo view('layouts/footer.php');
    }
}
