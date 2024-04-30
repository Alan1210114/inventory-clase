<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevolucionesCompra extends Model
{
    protected $table = 'devoluciones_compra';
    protected $primaryKey = 'id';

 public function REL_proveedores(){
    return $this->hasOne('\App\Models\Proveedores','id','id');
 }


 public function REL_facturas_proveedores(){
    return $this->hasOne('\App\Models\Facturasproveedores','id','id');
 }


}