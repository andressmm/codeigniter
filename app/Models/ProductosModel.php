<?php 
namespace App\Models;

use CodeIgniter\Model;

class ProductosModel extends Model{
    protected $table='productos';
    protected $primaryKey ='id';
    protected $allowedFields = ['producto','precio','descripcion','stock','codigo'];


}