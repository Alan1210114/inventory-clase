<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\DevolucionesCompra;
 use App\Models\Proveedores;
 use App\Models\FacturasProveedores;

class DevolucionesCompraController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $devoluciones_compra = DevolucionesCompra::paginate(10);
       return view('DevolucionesCompra.index')->with(['DevolucionesCompraList'=>$devoluciones_compra,'Title'=>'Lista de devoluciones_compras','ActiveMenu'=>'devoluciones_compras']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $Proveedoress = Proveedores::all();
    $Facturasproveedoress = FacturasProveedores::all();
     return view('DevolucionesCompra.create')->with(['ProveedoresList'=>$Proveedoress,'FacturasproveedoresList'=>$Facturasproveedoress,'Title'=>'Lista de devoluciones_compra','ActiveMenu'=>'devoluciones_compra']);
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
   $devoluciones_compra = new DevolucionesCompra;
     $devoluciones_compra->fecha = $request->fecha;
     $devoluciones_compra->proveedor_id = $request->proveedor_id;
     $devoluciones_compra->total = $request->total;
     $devoluciones_compra->factura_id = $request->factura_id;
    $devoluciones_compra->save();
   return redirect('/admin/devoluciones_compra');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ DevolucionesCompra
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $devoluciones_compra = DevolucionesCompra::find($id);
      }
      else{
        $devoluciones_compra = DevolucionesCompra::All();
      }
      return $devoluciones_compra;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ DevolucionesCompra
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $Proveedores = Proveedores::all();
    $Facturasproveedores = Facturasproveedores::all();
     $DevolucionesCompra = DevolucionesCompra::find($id);
      return view('devoluciones_compra.edit')->with(['DevolucionesCompra'=>$DevolucionesCompra,'ProveedoresList'=>$Proveedores,'FacturasproveedoresList'=>$Facturasproveedores,'Title'=>'Editar devoluciones_compra','ActiveMenu'=>'devoluciones_compra']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ DevolucionesCompra
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $devoluciones_compra = DevolucionesCompra::find($id);
     $devoluciones_compra->fecha = $request->fecha;
     $devoluciones_compra->proveedor_id = $request->proveedor_id;
     $devoluciones_compra->total = $request->total;
     $devoluciones_compra->factura_id = $request->factura_id;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $devoluciones_compra->update();
   return redirect('/admin/devoluciones_compra');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\DevolucionesCompra
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $DevolucionesCompra = DevolucionesCompra::find($id);
       $DevolucionesCompra->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('DevolucionesCompra.index');
   }
}  
