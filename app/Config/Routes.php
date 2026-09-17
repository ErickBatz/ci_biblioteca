<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
/*Rutas de empleados*/
$routes->get('empleados', 'EmpleadosController::index');
$routes->get('eliminar/(:num)', 'EmpleadosController::eliminar/$1');
$routes->get('buscar/(:num)', 'EmpleadosController::buscarId/$1');
$routes->post('actualizar', 'EmpleadosController::actualizar');
$routes->post('insertar', 'EmpleadosController::insertar');

/*Rutas de estudiantes*/
$routes->get('estudiantes', 'EstudiantesController::index');
$routes->get('eliminarEstudiante/(:num)', 'EstudiantesController::eliminar/$1');
$routes->get('bucarEstudiante/(:num)', 'EstudiantesController::buscarId/$1');
$routes->post('actualizarEstudiante', 'EstudiantesController::actualizar');
$routes->post('insertarEstudiante', 'EstudiantesController::insertar');

/*Rutas de la tabla libros*/
$routes->get('libros', 'LibrosController::index');
$routes->get('buscarLibro/(:num)', 'LibrosController::buscarId/$1');
$routes->post('actualizarLibro', 'LibrosController::actualizar');
$routes->post('insertarLibro', 'LibrosController::insertar');
$routes->get('eliminarLibro/(:num)', 'LibrosController::eliminar/$1');

/*Rutas de la tabla prestamos*/
$routes->get('prestamos', 'PrestamosController::index');
$routes->get('buscarPrestamo/(:num)', 'PrestamosController::buscarId/$1');
$routes->post('actualizarPrestamo', 'PrestamosController::actualizar');
$routes->post('insertarPrestamo', 'PrestamosController::insertar');
$routes->get('eliminarPrestamo/(:num)', 'PrestamosController::eliminar/$1');

/*Rutas de Editoriales*/
$routes->get('editoriales','EditorialesController::index');
$routes->get('buscarEditorial/(:num)','EditorialesController::buscarId/$1');
$routes->post('actualizarEditorial','EditorialesController::actualizar');
$routes->get('eliminarEditorial/(:num)', 'EditorialesController::eliminar/$1');

/*Rutas de Autores*/
$routes->get('autores', 'AutoresController::index');
$routes->get('buscarAutor/(:num)', 'AutoresController::buscarId/$1');
$routes->post('actualizarAutor', 'AutoresController::actualizar');
$routes->post('insertarAutor', 'AutoresController::insertar');
$routes->get('eliminarAutor/(:num)', 'AutoresController::eliminar/$1');

/*Rutas de Estados*/
$routes->get('estados', 'EstadosController::index');
$routes->get('buscarEstado/(:num)', 'EstadosController::buscarId/$1');
$routes->post('actualizarEstado', 'EstadosController::actualizar');
$routes->post('insertarEstado', 'EstadosController::insertar');
$routes->get('eliminarEstado/(:num)', 'EstadosController::eliminar/$1');
