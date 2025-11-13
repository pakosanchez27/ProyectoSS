<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function index()
    {

        echo view('layouts/header.php');
        echo view('admin/home.php');
        echo view('layouts/footer.php');
    }
}
