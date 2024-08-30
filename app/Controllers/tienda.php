<?php

namespace App\Controllers;

class Tienda extends BaseController
{
    public function index() //: string
    {
        
    //    echo "HOla estas en la tienda";
    $data['productos']=[
    ['nombre'=>'Camisa','precio'=>'2000'],
    ['nombre'=>'Pantalon','precio'=>'5000'],
    ['nombre'=>'Gorra','precio'=>'900'],
    ];
        return view('tienda', $data);
        
    }
}
