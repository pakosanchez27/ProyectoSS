<?php

use App\Controllers\HomeController;
use App\Controllers\RolController;
use App\Controllers\UsuarioController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('noticias', 'Noticias_Controller::index');
$routes->get('adm_Contenido', 'Adm_Contenido_Controller::index');
$routes->get('adm_Menus', 'Adm_Menus_Controller::index');
$routes->get('somos', 'somos_Controller::index');
$routes->get('Prevencion_Seguridad', 'Prevencion_Seguridad_Controller::index');
$routes->get('Neza_Segura', 'Neza_Segura_Controller::index');
$routes->get('Tramites_Servicios', 'Tramites_Servicios_Controller::index');
$routes->get('Formacion_Policial', 'Formacion_Policial_Controller::index');
$routes->get('Seguridad_Cerca', 'Seguridad_Cerca_Controller::index');
$routes->get('prueba', 'prueba_Controller::index');


// Login

$routes->get('/login', 'LoginController::index');
$routes->post('login/store', 'LoginController::store');

// Logout
$routes->get('/logout', 'LogoutController::logout');

$routes->get('/acceso-denegado', 'ErrorController::denegado');
// Home
$routes->get('/home', 'HomeController::index');


// Usuarios
$routes->get('admin/usuarios', 'UsuarioController::index');

// Roles

$routes->get('/admin/roles', 'RolController::index', ['filter' => ['auth', 'rol:1,2']]);
$routes->post('/admin/roles/store', 'RolController::store');
$routes->post('/admin/roles/show', 'RolController::show');
$routes->post('/admin/roles/update', 'RolController::update');
$routes->post('/admin/roles/delete', 'RolController::delete');

// Areas
$routes->get('admin/areas', 'AreasController::index');
//   $routes->get('/admin/roles', 'RolController::index');
