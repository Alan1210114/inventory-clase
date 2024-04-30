<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Roles;

class RolesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $roles = Roles::paginate(10);
       return view('Roles.index')->with(['RolesList'=>$roles,'Title'=>'Lista de roless','ActiveMenu'=>'roless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Roles.create')->with(['Title'=>'Lista de roles','ActiveMenu'=>'roles']);
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
   $roles = new Roles;
     $roles->nombreRol = $request->nombreRol;
     $roles->created_at = $request->created_at;
     $roles->updated_at = $request->updated_at;
    $roles->save();
   return redirect('/admin/roles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Roles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $roles = Roles::find($id);
      }
      else{
        $roles = Roles::All();
      }
      return $roles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Roles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Roles = Roles::find($id);
      return view('roles.edit')->with(['Roles'=>$Roles,'Title'=>'Editar roles','ActiveMenu'=>'roles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Roles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $roles = Roles::find($id);
     $roles->nombreRol = $request->nombreRol;
     $roles->created_at = $request->created_at;
     $roles->updated_at = $request->updated_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $roles->update();
   return redirect('/admin/roles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Roles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Roles = Roles::find($id);
       $Roles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Roles.index');
   }
}  
