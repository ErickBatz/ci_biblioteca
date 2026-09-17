<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\EditorialesModel;


class EditorialesController extends BaseController
{
    public function index()
    {
        //creamos un objeto del modelo
        $editorial = new EditorialesModel();
        $datos['datos'] = $editorial->findAll();
        return view('editoriales',$datos);

    }

    public function buscarid($codigo){
        $editorial = new EditorialesModel();
        $datos['datos'] = $editorial->where('codigo_editorial',$codigo)->first();
        
        return view ('editorial_editar',$datos);
    }

    public function actualizar(){
        /*Recibir los datos de formulario*/
        $codigo = $this->request->getVar('txt_codigo');


        /*Trasladamos los datos a un Array */

        $datos=[
            'nombre'=>$this->request->getVar('txt_nombre'),
            'direccion'=>$this->request->getVar('txt_direccion'),
            'telefono'=>$this->request->getVar('txt_telefono'),
            'email'=>$this->request->getVar('txt_email')
        ];
        //ejecutar el metodo update
        $editorial = new EditorialesModel();
        $editorial->update($codigo,$datos);
        return $this->index();
    }

    public function eliminar($codigo)
    {
        $editorial = new EditorialesModel();
        $editorial->delete($codigo);

        return $this->index();
    }
    
}
