<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\FacturasClientesDetalles;

class FacturasClientesDetallesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $facturas_clientes_detalles = FacturasClientesDetalles::paginate(10);
       return view('FacturasClientesDetalles.index')->with(['FacturasClientesDetallesList'=>$facturas_clientes_detalles,'Title'=>'Lista de facturas_clientes_detalless','ActiveMenu'=>'facturas_clientes_detalless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('FacturasClientesDetalles.create')->with(['Title'=>'Lista de facturas_clientes_detalles','ActiveMenu'=>'facturas_clientes_detalles']);
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
   $facturas_clientes_detalles = new FacturasClientesDetalles;
     $facturas_clientes_detalles->facturas_clientes_id = $request->facturas_clientes_id;
     $facturas_clientes_detalles->producto_id = $request->producto_id;
     $facturas_clientes_detalles->lote = $request->lote;
     $facturas_clientes_detalles->cantidad = $request->cantidad;
     $facturas_clientes_detalles->importe = $request->importe;
     $facturas_clientes_detalles->precio_venta = $request->precio_venta;
     $facturas_clientes_detalles->created_at = $request->created_at;
     $facturas_clientes_detalles->updated_at = $request->updated_at;
     $facturas_clientes_detalles->deleted_at = $request->deleted_at;
    $facturas_clientes_detalles->save();
   return redirect('/admin/facturas_clientes_detalles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ FacturasClientesDetalles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $facturas_clientes_detalles = FacturasClientesDetalles::find($id);
      }
      else{
        $facturas_clientes_detalles = FacturasClientesDetalles::All();
      }
      return $facturas_clientes_detalles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ FacturasClientesDetalles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $FacturasClientesDetalles = FacturasClientesDetalles::find($id);
      return view('facturas_clientes_detalles.edit')->with(['FacturasClientesDetalles'=>$FacturasClientesDetalles,'Title'=>'Editar facturas_clientes_detalles','ActiveMenu'=>'facturas_clientes_detalles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ FacturasClientesDetalles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $facturas_clientes_detalles = FacturasClientesDetalles::find($id);
     $facturas_clientes_detalles->facturas_clientes_id = $request->facturas_clientes_id;
     $facturas_clientes_detalles->producto_id = $request->producto_id;
     $facturas_clientes_detalles->lote = $request->lote;
     $facturas_clientes_detalles->cantidad = $request->cantidad;
     $facturas_clientes_detalles->importe = $request->importe;
     $facturas_clientes_detalles->precio_venta = $request->precio_venta;
     $facturas_clientes_detalles->created_at = $request->created_at;
     $facturas_clientes_detalles->updated_at = $request->updated_at;
     $facturas_clientes_detalles->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $facturas_clientes_detalles->update();
   return redirect('/admin/facturas_clientes_detalles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\FacturasClientesDetalles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $FacturasClientesDetalles = FacturasClientesDetalles::find($id);
       $FacturasClientesDetalles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('FacturasClientesDetalles.index');
   }
}  
