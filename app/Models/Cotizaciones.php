<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cotizaciones extends Model
{
    protected $table = 'cotizaciones';
    protected $primaryKey = 'id';

 public function REL_clientes(){
    return $this->hasOne('\App\Models\Clientes','id','id');
 }


}