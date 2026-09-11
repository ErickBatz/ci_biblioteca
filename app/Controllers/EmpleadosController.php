<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
/*Modelo que se utilizará */
use App\Models\EmpleadosModel;

class EmpleadosController extends BaseController
{
    public function index()
    {
        //crear un objeto del modelo
        $empleado = new EmpleadosModel();
        $datos["datos"]=$empleado->findAll();
        return view("empleados",$datos);
    }
    public function buscarId($codigo){
        $empleado = new EmpleadosModel();
        $datos["datos"]=$empleado->where('codigo_empleado',$codigo)->first();
        return view("empleados_editar",$datos);
    }
    public function actualizar()
    {
        //recibir los datos del formulario
        $codigo = $this->request->getVar('txt_codigo');
        
        //trasladar los datos a un array
        $datos=[
            'nombre'=>$this->request->getVar('txt_nombre'),
            'apellido'=>$this->request->getVar('txt_apellido'),
            'direccion'=>$this->request->getVar('txt_direccion'),
            'email'=>$this->request->getVar('txt_email')
        ];
        //ejecutar el metodo de update
        $empleado = new EmpleadosModel();
        $empleado->update($codigo,$datos);
        return $this->index();
    }
    public function insertar()
    {
        //recibir los datos y agregarlos en un array
        $datos=[
            'codigo_empleado'=>$this->request->getVar('txt_codigo'),
            'nombre'=>$this->request->getVar('txt_nombre'),
            'apellido'=>$this->request->getVar('txt_apellido'),
            'direccion'=>$this->request->getVar('txt_direccion'),
            'email'=>$this->request->getVar('txt_email')
        ];
        //ejecutar el metodo insert
        $empleado = new EmpleadosModel();
        $empleado->insert($datos);
        return $this->index();
    }
    public function eliminar($codigo)
    {
        $empleado = new EmpleadosModel();
        $empleado->delete($codigo);

        //llama al metodo index, carga los datos en la vista empleados
        return $this->index();
    }
}
