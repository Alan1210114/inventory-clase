<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\FacturasProveedores;

class FacturasProveedoresController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $facturas_proveedores = FacturasProveedores::paginate(10);
       return view('FacturasProveedores.index')->with(['FacturasProveedoresList'=>$facturas_proveedores,'Title'=>'Lista de facturas_proveedoress','ActiveMenu'=>'facturas_proveedoress']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('FacturasProveedores.create')->with(['Title'=>'Lista de facturas_proveedores','ActiveMenu'=>'facturas_proveedores']);
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
   $facturas_proveedores = new FacturasProveedores;
     $facturas_proveedores->fecha = $request->fecha;
     $facturas_proveedores->proveedor_id = $request->proveedor_id;
     $facturas_proveedores->sub_total = $request->sub_total;
     $facturas_proveedores->iva = $request->iva;
     $facturas_proveedores->total = $request->total;
     $facturas_proveedores->created_at = $request->created_at;
     $facturas_proveedores->updated_at = $request->updated_at;
     $facturas_proveedores->deleted_at = $request->deleted_at;
    $facturas_proveedores->save();
   return redirect('/admin/facturas_proveedores');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ FacturasProveedores
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $facturas_proveedores = FacturasProveedores::find($id);
      }
      else{
        $facturas_proveedores = FacturasProveedores::All();
      }
      return $facturas_proveedores;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ FacturasProveedores
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $FacturasProveedores = FacturasProveedores::find($id);
      return view('facturas_proveedores.edit')->with(['FacturasProveedores'=>$FacturasProveedores,'Title'=>'Editar facturas_proveedores','ActiveMenu'=>'facturas_proveedores']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ FacturasProveedores
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $facturas_proveedores = FacturasProveedores::find($id);
     $facturas_proveedores->fecha = $request->fecha;
     $facturas_proveedores->proveedor_id = $request->proveedor_id;
     $facturas_proveedores->sub_total = $request->sub_total;
     $facturas_proveedores->iva = $request->iva;
     $facturas_proveedores->total = $request->total;
     $facturas_proveedores->created_at = $request->created_at;
     $facturas_proveedores->updated_at = $request->updated_at;
     $facturas_proveedores->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $facturas_proveedores->update();
   return redirect('/admin/facturas_proveedores');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\FacturasProveedores
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $FacturasProveedores = FacturasProveedores::find($id);
       $FacturasProveedores->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('FacturasProveedores.index');
   }
}  
