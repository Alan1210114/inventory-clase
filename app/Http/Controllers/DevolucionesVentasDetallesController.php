<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\DevolucionesVentasDetalles;

class DevolucionesVentasDetallesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $devoluciones_ventas_detalles = DevolucionesVentasDetalles::paginate(10);
       return view('DevolucionesVentasDetalles.index')->with(['DevolucionesVentasDetallesList'=>$devoluciones_ventas_detalles,'Title'=>'Lista de devoluciones_ventas_detalless','ActiveMenu'=>'devoluciones_ventas_detalless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('DevolucionesVentasDetalles.create')->with(['Title'=>'Lista de devoluciones_ventas_detalles','ActiveMenu'=>'devoluciones_ventas_detalles']);
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
   $devoluciones_ventas_detalles = new DevolucionesVentasDetalles;
     $devoluciones_ventas_detalles->devoluciones_venta_id = $request->devoluciones_venta_id;
     $devoluciones_ventas_detalles->producto_id = $request->producto_id;
     $devoluciones_ventas_detalles->cantidad = $request->cantidad;
     $devoluciones_ventas_detalles->precio_venta = $request->precio_venta;
     $devoluciones_ventas_detalles->created_at = $request->created_at;
     $devoluciones_ventas_detalles->updated_at = $request->updated_at;
     $devoluciones_ventas_detalles->deleted_at = $request->deleted_at;
    $devoluciones_ventas_detalles->save();
   return redirect('/admin/devoluciones_ventas_detalles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ DevolucionesVentasDetalles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $devoluciones_ventas_detalles = DevolucionesVentasDetalles::find($id);
      }
      else{
        $devoluciones_ventas_detalles = DevolucionesVentasDetalles::All();
      }
      return $devoluciones_ventas_detalles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ DevolucionesVentasDetalles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $DevolucionesVentasDetalles = DevolucionesVentasDetalles::find($id);
      return view('devoluciones_ventas_detalles.edit')->with(['DevolucionesVentasDetalles'=>$DevolucionesVentasDetalles,'Title'=>'Editar devoluciones_ventas_detalles','ActiveMenu'=>'devoluciones_ventas_detalles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ DevolucionesVentasDetalles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $devoluciones_ventas_detalles = DevolucionesVentasDetalles::find($id);
     $devoluciones_ventas_detalles->devoluciones_venta_id = $request->devoluciones_venta_id;
     $devoluciones_ventas_detalles->producto_id = $request->producto_id;
     $devoluciones_ventas_detalles->cantidad = $request->cantidad;
     $devoluciones_ventas_detalles->precio_venta = $request->precio_venta;
     $devoluciones_ventas_detalles->created_at = $request->created_at;
     $devoluciones_ventas_detalles->updated_at = $request->updated_at;
     $devoluciones_ventas_detalles->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $devoluciones_ventas_detalles->update();
   return redirect('/admin/devoluciones_ventas_detalles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\DevolucionesVentasDetalles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $DevolucionesVentasDetalles = DevolucionesVentasDetalles::find($id);
       $DevolucionesVentasDetalles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('DevolucionesVentasDetalles.index');
   }
}  
