<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Controller;

/*llamamos al modelos que utilzaremos*/
use App\Models\EstudiantesModel;

class EstudiantesController extends BaseController
{
    public function index()
    {
        //creamos un objeto del modelo
        $estudiante = new EstudiantesModel();
        $datos['datos'] = $estudiante->findAll();
        return view('estudiantes', $datos);
    }

    public function eliminar($codigo)
    {
        $estudiante = new EstudiantesModel();
        $estudiante->delete($codigo);

        //llama al metodo index, carga de los datos en la vista empleados
        return $this->index();
    }

    public function buscarId($codigo)
    {
        $estudiante = new EstudiantesModel();
        $datos['datos'] = $estudiante->where('carne_alumno', $codigo)->first();
        return view('estudiantes_editar', $datos);
    }

    public function actualizar()
    {
        //recibir los datos der formulario
        $codigo = $this->request->getVar('txt_codigo');

        //trasladar los datos a un array
        $datos = [
            'nombre' => $this->request->getVar('txt_nombre'),
            'apellido' => $this->request->getVar('txt_apellido'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'telefono' => $this->request->getVar('txt_telefono'),
            'email' => $this->request->getVar('txt_email'),
            'fechanacimiento' => $this->request->getVar('txt_fechaNac'),
            'codigo_grado' => $this->request->getVar('txt_grado')
        ];
        //ejecutar el metodo update
        $estudiante = new EstudiantesModel();
        $estudiante->update($codigo, $datos);
        return $this->index();
    }

    public function insertar()
    {
        //recibir los datos ingresados en un array
        $datos = [
            'carne_alumno' => $this->request->getVar('txt_codigo'),
            'nombre' => $this->request->getVar('txt_nombre'),
            'apellido' => $this->request->getVar('txt_apellido'),
            'direccion' => $this->request->getVar('txt_direccion'),
            'telefono' => $this->request->getVar('txt_telefono'),
            'email' => $this->request->getVar('txt_email'),
            'codigo_grado' => $this->request->getVar('txt_grado'),
        ];
        //ejecutar el metodo insert
        $estudiante = new EstudiantesModel();
        $estudiante->insert($datos);
        return $this->index();
    }
}
