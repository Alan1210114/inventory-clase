<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $primaryKey = 'id';

    public function REL_permisos_roles(){
        return $this->hasMany('App\Models\PermisosRoles', 'id','idRol');
    }

}