<?php

namespace App\Controllers;
use App\Models\ProductosModel;

class Productos extends BaseController
{
    public function index() //: string
    {
    
        // instanciar modelo productosModel

        $productosModel = new ProductosModel();

       // obtener datos de la bd
        $productos=$productosModel->findAll();

        // carga vista
        return view('productos/index', ['productos'=>$productos]);
        
    }


    public function ver($id) //: string
    {
    
        // instanciar modelo productosModel

        $productosModel = new ProductosModel();

       // obtener datos de la bd del prod selecc
        $producto=$productosModel->find($id);

        // verificar que existe

        if ($producto===null){
            return redirect()->to(base_url('productos'))->with('error',"Producto no encontrado");
        }

        // carga vista
        return view('productos/ver', ['producto'=>$producto]);
        
    }



    public function crear() //: string
    {
    

        // carga vista
        return view('productos/crear');
        
    }








    public function guardar() 
    {
        // Obtener datos del formulario
        $nombre = $this->request->getPost('nombre');
        $descripcion = $this->request->getPost('descripcion');
        $precio = $this->request->getPost('precio');
        
        // Definir reglas de validación
        $rules = [
            'nombre' => 'required',
            'precio' => 'required|numeric',
        ];
    
        // Validar los datos del formulario
        if (!$this->validate($rules)) {  // Si la validación falla
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }
    
        // Instanciar el modelo y preparar los datos
        $productosModel = new ProductosModel();
        $productoData = [
            'producto' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
        ];
    
        // Insertar los datos en la base de datos
        $productosModel->insert($productoData);    
    
        // Redirigir con mensaje de éxito
        return redirect()->to(base_url('productos'))->with('success', 'Producto guardado correctamente');
    }




}


?>