<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\FacturasProveedoresDetalles;

class FacturasProveedoresDetallesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $facturas_proveedores_detalles = FacturasProveedoresDetalles::paginate(10);
       return view('FacturasProveedoresDetalles.index')->with(['FacturasProveedoresDetallesList'=>$facturas_proveedores_detalles,'Title'=>'Lista de facturas_proveedores_detalless','ActiveMenu'=>'facturas_proveedores_detalless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('FacturasProveedoresDetalles.create')->with(['Title'=>'Lista de facturas_proveedores_detalles','ActiveMenu'=>'facturas_proveedores_detalles']);
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
   $facturas_proveedores_detalles = new FacturasProveedoresDetalles;
     $facturas_proveedores_detalles->facturas_proveedores_id = $request->facturas_proveedores_id;
     $facturas_proveedores_detalles->material_id = $request->material_id;
     $facturas_proveedores_detalles->cantidad = $request->cantidad;
     $facturas_proveedores_detalles->importe = $request->importe;
     $facturas_proveedores_detalles->precio_venta = $request->precio_venta;
     $facturas_proveedores_detalles->created_at = $request->created_at;
     $facturas_proveedores_detalles->updated_at = $request->updated_at;
     $facturas_proveedores_detalles->deleted_at = $request->deleted_at;
    $facturas_proveedores_detalles->save();
   return redirect('/admin/facturas_proveedores_detalles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ FacturasProveedoresDetalles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $facturas_proveedores_detalles = FacturasProveedoresDetalles::find($id);
      }
      else{
        $facturas_proveedores_detalles = FacturasProveedoresDetalles::All();
      }
      return $facturas_proveedores_detalles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ FacturasProveedoresDetalles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $FacturasProveedoresDetalles = FacturasProveedoresDetalles::find($id);
      return view('facturas_proveedores_detalles.edit')->with(['FacturasProveedoresDetalles'=>$FacturasProveedoresDetalles,'Title'=>'Editar facturas_proveedores_detalles','ActiveMenu'=>'facturas_proveedores_detalles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ FacturasProveedoresDetalles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $facturas_proveedores_detalles = FacturasProveedoresDetalles::find($id);
     $facturas_proveedores_detalles->facturas_proveedores_id = $request->facturas_proveedores_id;
     $facturas_proveedores_detalles->material_id = $request->material_id;
     $facturas_proveedores_detalles->cantidad = $request->cantidad;
     $facturas_proveedores_detalles->importe = $request->importe;
     $facturas_proveedores_detalles->precio_venta = $request->precio_venta;
     $facturas_proveedores_detalles->created_at = $request->created_at;
     $facturas_proveedores_detalles->updated_at = $request->updated_at;
     $facturas_proveedores_detalles->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $facturas_proveedores_detalles->update();
   return redirect('/admin/facturas_proveedores_detalles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\FacturasProveedoresDetalles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $FacturasProveedoresDetalles = FacturasProveedoresDetalles::find($id);
       $FacturasProveedoresDetalles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('FacturasProveedoresDetalles.index');
   }
}  
