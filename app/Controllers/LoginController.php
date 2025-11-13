<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController
{
    public function index()
    {
        echo view('head');
        echo view('header');
        echo view('login/login');
        echo view('footer');
    }

    public function store()
    {
        $userModel = new \App\Models\UserModel();
        $session   = session();

        $email    = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user || !password_verify($password, $user['password'])) {
            return $this->response->setJSON([
                'status'  => 'error',
                'message' => 'Correo o contraseña incorrectos.'
            ]);
        }

        // Crear sesión
        $session->set([
            'id'        => $user['id'],
            'nombre'    => $user['nombre'],
            'email'     => $user['email'],
            'id_rol'    => $user['id_rol'],
            'id_area'   => $user['id_area'],
            'logged_in' => true,
        ]);
        
        // En vez de redirect()
        return $this->response->setJSON([
            'status'   => 'success',
            'message'  => 'Inicio de sesión correcto.',
            'redirect' => base_url('/home')
        ]);
    }
}
