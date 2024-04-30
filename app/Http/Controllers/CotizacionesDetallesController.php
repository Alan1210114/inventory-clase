<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\CotizacionesDetalles;
 use App\Models\Cotizaciones;
 use App\Models\Productos;

class CotizacionesDetallesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $cotizaciones_detalles = CotizacionesDetalles::paginate(10);
       return view('CotizacionesDetalles.index')->with(['CotizacionesDetallesList'=>$cotizaciones_detalles,'Title'=>'Lista de cotizaciones_detalless','ActiveMenu'=>'cotizaciones_detalless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $Cotizacioness = Cotizaciones::all();
    $Productoss = Productos::all();
     return view('CotizacionesDetalles.create')->with(['CotizacionesList'=>$Cotizacioness,'ProductosList'=>$Productoss,'Title'=>'Lista de cotizaciones_detalles','ActiveMenu'=>'cotizaciones_detalles']);
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
   $cotizaciones_detalles = new CotizacionesDetalles;
     $cotizaciones_detalles->cotizaciones_id = $request->cotizaciones_id;
     $cotizaciones_detalles->producto_id = $request->producto_id;
     $cotizaciones_detalles->cantidad = $request->cantidad;
     $cotizaciones_detalles->importe = $request->importe;
     $cotizaciones_detalles->precio_venta = $request->precio_venta;
    $cotizaciones_detalles->save();
   return redirect('/admin/cotizaciones_detalles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ CotizacionesDetalles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $cotizaciones_detalles = CotizacionesDetalles::find($id);
      }
      else{
        $cotizaciones_detalles = CotizacionesDetalles::All();
      }
      return $cotizaciones_detalles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ CotizacionesDetalles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $Cotizaciones = Cotizaciones::all();
    $Productos = Productos::all();
     $CotizacionesDetalles = CotizacionesDetalles::find($id);
      return view('cotizaciones_detalles.edit')->with(['CotizacionesDetalles'=>$CotizacionesDetalles,'CotizacionesList'=>$Cotizaciones,'ProductosList'=>$Productos,'Title'=>'Editar cotizaciones_detalles','ActiveMenu'=>'cotizaciones_detalles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ CotizacionesDetalles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $cotizaciones_detalles = CotizacionesDetalles::find($id);
     $cotizaciones_detalles->cotizaciones_id = $request->cotizaciones_id;
     $cotizaciones_detalles->producto_id = $request->producto_id;
     $cotizaciones_detalles->cantidad = $request->cantidad;
     $cotizaciones_detalles->importe = $request->importe;
     $cotizaciones_detalles->precio_venta = $request->precio_venta;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $cotizaciones_detalles->update();
   return redirect('/admin/cotizaciones_detalles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\CotizacionesDetalles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $CotizacionesDetalles = CotizacionesDetalles::find($id);
       $CotizacionesDetalles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('CotizacionesDetalles.index');
   }
}  
