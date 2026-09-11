<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\LibrosModel;

class LibrosController extends BaseController
{
    public function index()
    {
        $libro = new LibrosModel();
        $datos['datos'] = $libro->findAll();
        return view('libros', $datos);
    }
    public function buscarId($codigo)
    {
        $libro = new LibrosModel();
        $datos['datos'] = $libro->where('codigo_libro', $codigo)->first();
        return view('libros_editar', $datos);
    }

    public function actualizar()
    {
        $codigo = $this->request->getVar('txt_codigo');

        $datos = [
            'codigo_autor' => $this->request->getVar('txt_autor'),
            'codigo_editorial' => $this->request->getVar('txt_editorial'),
            'titulo' => $this->request->getVar('txt_titulo'),
            'numero_paginas' => $this->request->getVar('txt_paginas'),
            'tamanio' => $this->request->getVar('txt_tamanio'),
            'precio' => $this->request->getVar('num_precio'),
            'estado' => $this->request->getVar('txt_estado'),
            'edicion' => $this->request->getVar('txt_edicion')
        ];

        //creamos un objeto y ejecutamos el metodo update
        $libro = new LibrosModel();
        $libro->update($codigo, $datos);
        return $this->index();
    }
    public function insertar()
    {
        //recibir los datos y agregarlos a un array
        $datos = [
            'codigo_libro' => $this->request->getVar('txt_codigo'),
            'codigo_autor' => $this->request->getVar('txt_autor'),
            'codigo_editorial' => $this->request->getVar('txt_editorial'),
            'titulo' => $this->request->getVar('txt_titulo'),
            'numero_paginas' => $this->request->getVar('txt_paginas'),
            'tamanio' => $this->request->getVar('txt_tamanio'),
            'precio' => $this->request->getVar('num_precio'),
            'estado' => $this->request->getVar('txt_estado'),
            'edicion' => $this->request->getVar('txt_edicion')
        ];

        //ejecutamos el metodo insert
        $libro = new LibrosModel();
        $libro->insert($datos);
        return $this->index();
    }

    public function eliminar($codigo)
    {
        //creamos objeto para ejecutar el metod delete
        $libro = new LibrosModel();
        $libro->delete($codigo);

        //llamamos el metodo index para visualizar los cambios

        return $this->index();
    }
}
