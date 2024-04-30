<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\ProductosProceso;

class ProductosProcesoController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $productos_proceso = ProductosProceso::paginate(10);
       return view('ProductosProceso.index')->with(['ProductosProcesoList'=>$productos_proceso,'Title'=>'Lista de productos_procesos','ActiveMenu'=>'productos_procesos']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('ProductosProceso.create')->with(['Title'=>'Lista de productos_proceso','ActiveMenu'=>'productos_proceso']);
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
   $productos_proceso = new ProductosProceso;
     $productos_proceso->producto_id = $request->producto_id;
     $productos_proceso->lote = $request->lote;
     $productos_proceso->tipo_pieza = $request->tipo_pieza;
     $productos_proceso->precio_costo = $request->precio_costo;
     $productos_proceso->precio_venta = $request->precio_venta;
     $productos_proceso->cantidad = $request->cantidad;
     $productos_proceso->status = $request->status;
     $productos_proceso->created_at = $request->created_at;
     $productos_proceso->updated_at = $request->updated_at;
     $productos_proceso->deleted_at = $request->deleted_at;
    $productos_proceso->save();
   return redirect('/admin/productos_proceso');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ ProductosProceso
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $productos_proceso = ProductosProceso::find($id);
      }
      else{
        $productos_proceso = ProductosProceso::All();
      }
      return $productos_proceso;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ ProductosProceso
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $ProductosProceso = ProductosProceso::find($id);
      return view('productos_proceso.edit')->with(['ProductosProceso'=>$ProductosProceso,'Title'=>'Editar productos_proceso','ActiveMenu'=>'productos_proceso']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ ProductosProceso
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $productos_proceso = ProductosProceso::find($id);
     $productos_proceso->producto_id = $request->producto_id;
     $productos_proceso->lote = $request->lote;
     $productos_proceso->tipo_pieza = $request->tipo_pieza;
     $productos_proceso->precio_costo = $request->precio_costo;
     $productos_proceso->precio_venta = $request->precio_venta;
     $productos_proceso->cantidad = $request->cantidad;
     $productos_proceso->status = $request->status;
     $productos_proceso->created_at = $request->created_at;
     $productos_proceso->updated_at = $request->updated_at;
     $productos_proceso->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $productos_proceso->update();
   return redirect('/admin/productos_proceso');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\ProductosProceso
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $ProductosProceso = ProductosProceso::find($id);
       $ProductosProceso->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('ProductosProceso.index');
   }
}  
