<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\OrdenCompra;

class OrdenCompraController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $orden_compra = OrdenCompra::paginate(10);
       return view('OrdenCompra.index')->with(['OrdenCompraList'=>$orden_compra,'Title'=>'Lista de orden_compras','ActiveMenu'=>'orden_compras']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('OrdenCompra.create')->with(['Title'=>'Lista de orden_compra','ActiveMenu'=>'orden_compra']);
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
   $orden_compra = new OrdenCompra;
     $orden_compra->fecha = $request->fecha;
     $orden_compra->proveedor_id = $request->proveedor_id;
     $orden_compra->created_at = $request->created_at;
     $orden_compra->updated_at = $request->updated_at;
     $orden_compra->deleted_at = $request->deleted_at;
    $orden_compra->save();
   return redirect('/admin/orden_compra');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ OrdenCompra
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $orden_compra = OrdenCompra::find($id);
      }
      else{
        $orden_compra = OrdenCompra::All();
      }
      return $orden_compra;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ OrdenCompra
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $OrdenCompra = OrdenCompra::find($id);
      return view('orden_compra.edit')->with(['OrdenCompra'=>$OrdenCompra,'Title'=>'Editar orden_compra','ActiveMenu'=>'orden_compra']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ OrdenCompra
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $orden_compra = OrdenCompra::find($id);
     $orden_compra->fecha = $request->fecha;
     $orden_compra->proveedor_id = $request->proveedor_id;
     $orden_compra->created_at = $request->created_at;
     $orden_compra->updated_at = $request->updated_at;
     $orden_compra->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $orden_compra->update();
   return redirect('/admin/orden_compra');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\OrdenCompra
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $OrdenCompra = OrdenCompra::find($id);
       $OrdenCompra->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('OrdenCompra.index');
   }
}  
