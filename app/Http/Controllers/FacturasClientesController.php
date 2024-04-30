<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\FacturasClientes;

class FacturasClientesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $facturas_clientes = FacturasClientes::paginate(10);
       return view('FacturasClientes.index')->with(['FacturasClientesList'=>$facturas_clientes,'Title'=>'Lista de facturas_clientess','ActiveMenu'=>'facturas_clientess']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('FacturasClientes.create')->with(['Title'=>'Lista de facturas_clientes','ActiveMenu'=>'facturas_clientes']);
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
   $facturas_clientes = new FacturasClientes;
     $facturas_clientes->fecha = $request->fecha;
     $facturas_clientes->cliente_id = $request->cliente_id;
     $facturas_clientes->sub_total = $request->sub_total;
     $facturas_clientes->iva = $request->iva;
     $facturas_clientes->total = $request->total;
     $facturas_clientes->status = $request->status;
     $facturas_clientes->created_at = $request->created_at;
     $facturas_clientes->updated_at = $request->updated_at;
     $facturas_clientes->deleted_at = $request->deleted_at;
    $facturas_clientes->save();
   return redirect('/admin/facturas_clientes');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ FacturasClientes
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $facturas_clientes = FacturasClientes::find($id);
      }
      else{
        $facturas_clientes = FacturasClientes::All();
      }
      return $facturas_clientes;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ FacturasClientes
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $FacturasClientes = FacturasClientes::find($id);
      return view('facturas_clientes.edit')->with(['FacturasClientes'=>$FacturasClientes,'Title'=>'Editar facturas_clientes','ActiveMenu'=>'facturas_clientes']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ FacturasClientes
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $facturas_clientes = FacturasClientes::find($id);
     $facturas_clientes->fecha = $request->fecha;
     $facturas_clientes->cliente_id = $request->cliente_id;
     $facturas_clientes->sub_total = $request->sub_total;
     $facturas_clientes->iva = $request->iva;
     $facturas_clientes->total = $request->total;
     $facturas_clientes->status = $request->status;
     $facturas_clientes->created_at = $request->created_at;
     $facturas_clientes->updated_at = $request->updated_at;
     $facturas_clientes->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $facturas_clientes->update();
   return redirect('/admin/facturas_clientes');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\FacturasClientes
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $FacturasClientes = FacturasClientes::find($id);
       $FacturasClientes->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('FacturasClientes.index');
   }
}  
