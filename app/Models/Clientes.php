<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'id';

 public function REL_empresas(){
    return $this->hasOne('\App\Models\Empresas','id','id');
 }


}