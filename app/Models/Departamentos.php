<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departamentos extends Model
{
    protected $table = 'departamentos';
    protected $primaryKey = 'id';

 public function REL_empresas(){
    return $this->hasOne('\App\Models\Empresas','id','id');
 }


}