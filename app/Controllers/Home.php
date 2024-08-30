<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index() //: string
    {
        
        //echo "Hla mundo";
        
        $data['informacion']= "Ejemplo para mostar info en la vista";
        return view('home',$data);
    }
}
