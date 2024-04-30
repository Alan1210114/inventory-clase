<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\DevolucionesCompraDetalles;
 use App\Models\Materiales;

class DevolucionesCompraDetallesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $devoluciones_compra_detalles = DevolucionesCompraDetalles::paginate(10);
       return view('DevolucionesCompraDetalles.index')->with(['DevolucionesCompraDetallesList'=>$devoluciones_compra_detalles,'Title'=>'Lista de devoluciones_compra_detalless','ActiveMenu'=>'devoluciones_compra_detalless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $Materialess = Materiales::all();
     return view('DevolucionesCompraDetalles.create')->with(['MaterialesList'=>$Materialess,'Title'=>'Lista de devoluciones_compra_detalles','ActiveMenu'=>'devoluciones_compra_detalles']);
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
   $devoluciones_compra_detalles = new DevolucionesCompraDetalles;
     $devoluciones_compra_detalles->devoluciones_compra_id = $request->devoluciones_compra_id;
     $devoluciones_compra_detalles->material_id = $request->material_id;
     $devoluciones_compra_detalles->cantidad = $request->cantidad;
     $devoluciones_compra_detalles->precio_costo = $request->precio_costo;
    $devoluciones_compra_detalles->save();
   return redirect('/admin/devoluciones_compra_detalles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ DevolucionesCompraDetalles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $devoluciones_compra_detalles = DevolucionesCompraDetalles::find($id);
      }
      else{
        $devoluciones_compra_detalles = DevolucionesCompraDetalles::All();
      }
      return $devoluciones_compra_detalles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ DevolucionesCompraDetalles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $Materiales = Materiales::all();
     $DevolucionesCompraDetalles = DevolucionesCompraDetalles::find($id);
      return view('devoluciones_compra_detalles.edit')->with(['DevolucionesCompraDetalles'=>$DevolucionesCompraDetalles,'MaterialesList'=>$Materiales,'Title'=>'Editar devoluciones_compra_detalles','ActiveMenu'=>'devoluciones_compra_detalles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ DevolucionesCompraDetalles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $devoluciones_compra_detalles = DevolucionesCompraDetalles::find($id);
     $devoluciones_compra_detalles->devoluciones_compra_id = $request->devoluciones_compra_id;
     $devoluciones_compra_detalles->material_id = $request->material_id;
     $devoluciones_compra_detalles->cantidad = $request->cantidad;
     $devoluciones_compra_detalles->precio_costo = $request->precio_costo;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $devoluciones_compra_detalles->update();
   return redirect('/admin/devoluciones_compra_detalles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\DevolucionesCompraDetalles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $DevolucionesCompraDetalles = DevolucionesCompraDetalles::find($id);
       $DevolucionesCompraDetalles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('DevolucionesCompraDetalles.index');
   }
}  
