<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PrestamosModel;

class PrestamosController extends BaseController
{
    public function index()
    {
        $prestamo = new PrestamosModel();
        $datos['datos'] = $prestamo->findAll();
        return view('prestamos', $datos);
    }
    public function buscarId($codigo)
    {
        $prestamo = new PrestamosModel();
        $datos['datos'] = $prestamo->where('numero_prestamo', $codigo)->first();
        return view('prestamo_editar', $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');

        $datos = [
            'codigo_libro' => $this->request->getVar('txt_libro'),
            'carne_alumno' => $this->request->getVar('txt_alumno'),
            'fecha_prestamo' => $this->request->getVar('txt_fechaPrestamo'),
            'fecha_devolucion' => $this->request->getVar('txt_fechaDevolucion'),
            'codigo_empleado' => $this->request->getVar('txt_Empleado')
        ];

        $prestamo = new PrestamosModel();
        $prestamo->update($codigo, $datos);
        return $this->index();
    }

    public function insertar()
    {
        //treamos todos los datos del formulario
        $datos = [
            'numero_prestamo' => $this->request->getVar('txt_codigo'),
            'codigo_libro' => $this->request->getVar('txt_libro'),
            'carne_alumno' => $this->request->getVar('txt_alumno'),
            'fecha_prestamo' => $this->request->getVar('txt_fechaPrestamo'),
            'fecha_devolucion' => $this->request->getVar('txt_fechaDevolucion'),
            'codigo_empleado' => $this->request->getVar('txt_empleado')
        ];
        $prestamo = new PrestamosModel();
        $prestamo->insert($datos);

        return $this->index();
    }

    public function eliminar($codigo)
    {
        $prestamo = new PrestamosModel();
        $prestamo->delete($codigo);

        return $this->index();
    }
}
