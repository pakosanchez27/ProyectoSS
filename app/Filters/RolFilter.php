<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class RolFilter implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // Si no está logueado
        if (!$session->get('logged_in')) {
            return redirect()->to('/login');
        }

        // id_rol exacto desde la sesión
        $idRol = (int) $session->get('id_rol');

        log_message('debug', 'RolFilter -> id_rol en sesión: {idRol} | args: {args}', [
            'idRol' => $idRol,
            'args'  => json_encode($arguments),
        ]);

        // Si no se enviaron argumentos, no se restringe por rol
        if (empty($arguments)) {
            return;
        }

        // Convertimos '1,2' → ['1', '2'] → [1, 2]
        $rawArgs = explode(',', $arguments[0]);
        $allowedRoles = array_map('intval', $rawArgs);

        // Validamos
        if (!in_array($idRol, $allowedRoles, true)) {
            return service('response')
                ->setStatusCode(403)
                ->setBody(view('errors/acceso-denegado'));
        }
    }




    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        //
    }
}
