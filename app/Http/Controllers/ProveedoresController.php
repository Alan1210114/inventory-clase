<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Proveedores;

class ProveedoresController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $proveedores = Proveedores::paginate(10);
       return view('Proveedores.index')->with(['ProveedoresList'=>$proveedores,'Title'=>'Lista de proveedoress','ActiveMenu'=>'proveedoress']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Proveedores.create')->with(['Title'=>'Lista de proveedores','ActiveMenu'=>'proveedores']);
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
   $proveedores = new Proveedores;
     $proveedores->nombre_proveedor = $request->nombre_proveedor;
     $proveedores->empresa_id = $request->empresa_id;
     $proveedores->created_at = $request->created_at;
     $proveedores->updated_at = $request->updated_at;
     $proveedores->deleted_at = $request->deleted_at;
    $proveedores->save();
   return redirect('/admin/proveedores');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Proveedores
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $proveedores = Proveedores::find($id);
      }
      else{
        $proveedores = Proveedores::All();
      }
      return $proveedores;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Proveedores
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Proveedores = Proveedores::find($id);
      return view('proveedores.edit')->with(['Proveedores'=>$Proveedores,'Title'=>'Editar proveedores','ActiveMenu'=>'proveedores']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Proveedores
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $proveedores = Proveedores::find($id);
     $proveedores->nombre_proveedor = $request->nombre_proveedor;
     $proveedores->empresa_id = $request->empresa_id;
     $proveedores->created_at = $request->created_at;
     $proveedores->updated_at = $request->updated_at;
     $proveedores->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $proveedores->update();
   return redirect('/admin/proveedores');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Proveedores
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Proveedores = Proveedores::find($id);
       $Proveedores->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Proveedores.index');
   }
}  
