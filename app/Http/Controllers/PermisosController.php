<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Permisos;

class PermisosController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $permisos = Permisos::paginate(10);
       return view('Permisos.index')->with(['PermisosList'=>$permisos,'Title'=>'Lista de permisoss','ActiveMenu'=>'permisoss']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Permisos.create')->with(['Title'=>'Lista de permisos','ActiveMenu'=>'permisos']);
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
   $permisos = new Permisos;
     $permisos->nombrePermiso = $request->nombrePermiso;
     $permisos->slug = $request->slug;
     $permisos->id_parent = $request->id_parent;
     $permisos->isgroup = $request->isgroup;
     $permisos->orden = $request->orden;
     $permisos->route = $request->route;
     $permisos->icon = $request->icon;
     $permisos->image = $request->image;
     $permisos->color = $request->color;
     $permisos->created_at = $request->created_at;
     $permisos->updated_at = $request->updated_at;
    $permisos->save();
   return redirect('/admin/permisos');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Permisos
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $permisos = Permisos::find($id);
      }
      else{
        $permisos = Permisos::All();
      }
      return $permisos;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Permisos
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Permisos = Permisos::find($id);
      return view('permisos.edit')->with(['Permisos'=>$Permisos,'Title'=>'Editar permisos','ActiveMenu'=>'permisos']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Permisos
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $permisos = Permisos::find($id);
     $permisos->nombrePermiso = $request->nombrePermiso;
     $permisos->slug = $request->slug;
     $permisos->id_parent = $request->id_parent;
     $permisos->isgroup = $request->isgroup;
     $permisos->orden = $request->orden;
     $permisos->route = $request->route;
     $permisos->icon = $request->icon;
     $permisos->image = $request->image;
     $permisos->color = $request->color;
     $permisos->created_at = $request->created_at;
     $permisos->updated_at = $request->updated_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $permisos->update();
   return redirect('/admin/permisos');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Permisos
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Permisos = Permisos::find($id);
       $Permisos->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Permisos.index');
   }
}  
