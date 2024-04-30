<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DevolucionesCompraDetalles extends Model
{
    protected $table = 'devoluciones_compra_detalles';
    protected $primaryKey = 'id';

 public function REL_materiales(){
    return $this->hasOne('\App\Models\Materiales','id','id');
 }


}