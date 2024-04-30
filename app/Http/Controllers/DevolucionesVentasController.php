<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\DevolucionesVentas;

class DevolucionesVentasController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $devoluciones_ventas = DevolucionesVentas::paginate(10);
       return view('DevolucionesVentas.index')->with(['DevolucionesVentasList'=>$devoluciones_ventas,'Title'=>'Lista de devoluciones_ventass','ActiveMenu'=>'devoluciones_ventass']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('DevolucionesVentas.create')->with(['Title'=>'Lista de devoluciones_ventas','ActiveMenu'=>'devoluciones_ventas']);
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
   $devoluciones_ventas = new DevolucionesVentas;
     $devoluciones_ventas->fecha = $request->fecha;
     $devoluciones_ventas->cliente_id = $request->cliente_id;
     $devoluciones_ventas->factura_clientes_id = $request->factura_clientes_id;
     $devoluciones_ventas->total = $request->total;
     $devoluciones_ventas->updated_at = $request->updated_at;
     $devoluciones_ventas->deleted_at = $request->deleted_at;
    $devoluciones_ventas->save();
   return redirect('/admin/devoluciones_ventas');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ DevolucionesVentas
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $devoluciones_ventas = DevolucionesVentas::find($id);
      }
      else{
        $devoluciones_ventas = DevolucionesVentas::All();
      }
      return $devoluciones_ventas;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ DevolucionesVentas
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $DevolucionesVentas = DevolucionesVentas::find($id);
      return view('devoluciones_ventas.edit')->with(['DevolucionesVentas'=>$DevolucionesVentas,'Title'=>'Editar devoluciones_ventas','ActiveMenu'=>'devoluciones_ventas']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ DevolucionesVentas
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $devoluciones_ventas = DevolucionesVentas::find($id);
     $devoluciones_ventas->fecha = $request->fecha;
     $devoluciones_ventas->cliente_id = $request->cliente_id;
     $devoluciones_ventas->factura_clientes_id = $request->factura_clientes_id;
     $devoluciones_ventas->total = $request->total;
     $devoluciones_ventas->updated_at = $request->updated_at;
     $devoluciones_ventas->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $devoluciones_ventas->update();
   return redirect('/admin/devoluciones_ventas');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\DevolucionesVentas
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $DevolucionesVentas = DevolucionesVentas::find($id);
       $DevolucionesVentas->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('DevolucionesVentas.index');
   }
}  
