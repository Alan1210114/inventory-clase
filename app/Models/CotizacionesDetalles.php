<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CotizacionesDetalles extends Model
{
    protected $table = 'cotizaciones_detalles';
    protected $primaryKey = 'id';

 public function REL_cotizaciones(){
    return $this->hasOne('\App\Models\Cotizaciones','id','id');
 }


 public function REL_productos(){
    return $this->hasOne('\App\Models\Productos','id','id');
 }


}