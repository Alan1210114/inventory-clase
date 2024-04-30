<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\OrdenCompraDetalles;

class OrdenCompraDetallesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $orden_compra_detalles = OrdenCompraDetalles::paginate(10);
       return view('OrdenCompraDetalles.index')->with(['OrdenCompraDetallesList'=>$orden_compra_detalles,'Title'=>'Lista de orden_compra_detalless','ActiveMenu'=>'orden_compra_detalless']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('OrdenCompraDetalles.create')->with(['Title'=>'Lista de orden_compra_detalles','ActiveMenu'=>'orden_compra_detalles']);
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
   $orden_compra_detalles = new OrdenCompraDetalles;
     $orden_compra_detalles->orden_compra_id = $request->orden_compra_id;
     $orden_compra_detalles->material_id = $request->material_id;
     $orden_compra_detalles->cantidad = $request->cantidad;
     $orden_compra_detalles->created_at = $request->created_at;
     $orden_compra_detalles->updated_at = $request->updated_at;
     $orden_compra_detalles->deleted_at = $request->deleted_at;
    $orden_compra_detalles->save();
   return redirect('/admin/orden_compra_detalles');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ OrdenCompraDetalles
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $orden_compra_detalles = OrdenCompraDetalles::find($id);
      }
      else{
        $orden_compra_detalles = OrdenCompraDetalles::All();
      }
      return $orden_compra_detalles;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ OrdenCompraDetalles
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $OrdenCompraDetalles = OrdenCompraDetalles::find($id);
      return view('orden_compra_detalles.edit')->with(['OrdenCompraDetalles'=>$OrdenCompraDetalles,'Title'=>'Editar orden_compra_detalles','ActiveMenu'=>'orden_compra_detalles']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ OrdenCompraDetalles
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $orden_compra_detalles = OrdenCompraDetalles::find($id);
     $orden_compra_detalles->orden_compra_id = $request->orden_compra_id;
     $orden_compra_detalles->material_id = $request->material_id;
     $orden_compra_detalles->cantidad = $request->cantidad;
     $orden_compra_detalles->created_at = $request->created_at;
     $orden_compra_detalles->updated_at = $request->updated_at;
     $orden_compra_detalles->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $orden_compra_detalles->update();
   return redirect('/admin/orden_compra_detalles');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\OrdenCompraDetalles
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $OrdenCompraDetalles = OrdenCompraDetalles::find($id);
       $OrdenCompraDetalles->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('OrdenCompraDetalles.index');
   }
}  
