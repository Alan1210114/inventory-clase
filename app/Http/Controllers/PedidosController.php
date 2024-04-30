<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Pedidos;

class PedidosController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $pedidos = Pedidos::paginate(10);
       return view('Pedidos.index')->with(['PedidosList'=>$pedidos,'Title'=>'Lista de pedidoss','ActiveMenu'=>'pedidoss']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Pedidos.create')->with(['Title'=>'Lista de pedidos','ActiveMenu'=>'pedidos']);
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
   $pedidos = new Pedidos;
     $pedidos->fecha = $request->fecha;
     $pedidos->cliente_id = $request->cliente_id;
     $pedidos->created_at = $request->created_at;
     $pedidos->updated_at = $request->updated_at;
     $pedidos->deleted_at = $request->deleted_at;
    $pedidos->save();
   return redirect('/admin/pedidos');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Pedidos
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $pedidos = Pedidos::find($id);
      }
      else{
        $pedidos = Pedidos::All();
      }
      return $pedidos;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Pedidos
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Pedidos = Pedidos::find($id);
      return view('pedidos.edit')->with(['Pedidos'=>$Pedidos,'Title'=>'Editar pedidos','ActiveMenu'=>'pedidos']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Pedidos
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $pedidos = Pedidos::find($id);
     $pedidos->fecha = $request->fecha;
     $pedidos->cliente_id = $request->cliente_id;
     $pedidos->created_at = $request->created_at;
     $pedidos->updated_at = $request->updated_at;
     $pedidos->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $pedidos->update();
   return redirect('/admin/pedidos');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Pedidos
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Pedidos = Pedidos::find($id);
       $Pedidos->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Pedidos.index');
   }
}  
