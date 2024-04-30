<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\PermisosRoles;

class PermisosRolesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $permisos_roles = PermisosRoles::paginate(10);
       return view('PermisosRoles.index')->with(['PermisosRolesList'=>$permisos_roles,'Title'=>'Lista de permisos_roless','ActiveMenu'=>'permisos_roless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('PermisosRoles.create')->with(['Title'=>'Lista de permisos_roles','ActiveMenu'=>'permisos_roles']);
   }

   /**
    * Store a newly created resource in storage.
    *

    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
   public function store(Request $request)
   {
  $validator = Validator::make($request->all(), [
   ]);
 if ($validator->fails()) {
  return back()
     ->withErrors($validator)
     ->withInput($request->input());
}
   $permisos_roles = new PermisosRoles;
     $permisos_roles->idRol = $request->idRol;
     $permisos_roles->isgroup = $request->isgroup;
     $permisos_roles->orden = $request->orden;
     $permisos_roles->idPermiso = $request->idPermiso;
     $permisos_roles->Listar = $request->Listar;
     $permisos_roles->Ver = $request->Ver;
     $permisos_roles->Agregar = $request->Agregar;
     $permisos_roles->Modificar = $request->Modificar;
     $permisos_roles->Borrar = $request->Borrar;
     $permisos_roles->Docs = $request->Docs;
     $permisos_roles->Lotes = $request->Lotes;
     $permisos_roles->EdoCta = $request->EdoCta;
     $permisos_roles->Contract = $request->Contract;
     $permisos_roles->MostrarDatos = $request->MostrarDatos;
     $permisos_roles->created_at = $request->created_at;
     $permisos_roles->updated_at = $request->updated_at;
    $permisos_roles->save();
   return redirect('/admin/permisos_roles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ PermisosRoles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $permisos_roles = PermisosRoles::find($id);
      }
      else{
        $permisos_roles = PermisosRoles::All();
      }
      return $permisos_roles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ PermisosRoles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $PermisosRoles = PermisosRoles::find($id);
      return view('permisos_roles.edit')->with(['PermisosRoles'=>$PermisosRoles,'Title'=>'Editar permisos_roles','ActiveMenu'=>'permisos_roles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ PermisosRoles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $permisos_roles = PermisosRoles::find($id);
     $permisos_roles->idRol = $request->idRol;
     $permisos_roles->isgroup = $request->isgroup;
     $permisos_roles->orden = $request->orden;
     $permisos_roles->idPermiso = $request->idPermiso;
     $permisos_roles->Listar = $request->Listar;
     $permisos_roles->Ver = $request->Ver;
     $permisos_roles->Agregar = $request->Agregar;
     $permisos_roles->Modificar = $request->Modificar;
     $permisos_roles->Borrar = $request->Borrar;
     $permisos_roles->Docs = $request->Docs;
     $permisos_roles->Lotes = $request->Lotes;
     $permisos_roles->EdoCta = $request->EdoCta;
     $permisos_roles->Contract = $request->Contract;
     $permisos_roles->MostrarDatos = $request->MostrarDatos;
     $permisos_roles->created_at = $request->created_at;
     $permisos_roles->updated_at = $request->updated_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $permisos_roles->update();
   return redirect('/admin/permisos_roles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\PermisosRoles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $PermisosRoles = PermisosRoles::find($id);
       $PermisosRoles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('PermisosRoles.index');
   }
}  
