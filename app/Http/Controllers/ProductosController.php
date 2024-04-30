<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Productos;

class ProductosController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $productos = Productos::paginate(10);
       return view('Productos.index')->with(['ProductosList'=>$productos,'Title'=>'Lista de productoss','ActiveMenu'=>'productoss']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Productos.create')->with(['Title'=>'Lista de productos','ActiveMenu'=>'productos']);
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
   $productos = new Productos;
     $productos->empresa_id = $request->empresa_id;
     $productos->proveedor_id = $request->proveedor_id;
     $productos->tipo_pieza = $request->tipo_pieza;
     $productos->nombre_producto = $request->nombre_producto;
     $productos->created_at = $request->created_at;
     $productos->updated_at = $request->updated_at;
     $productos->deleted_at = $request->deleted_at;
    $productos->save();
   return redirect('/admin/productos');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Productos
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $productos = Productos::find($id);
      }
      else{
        $productos = Productos::All();
      }
      return $productos;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Productos
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Productos = Productos::find($id);
      return view('productos.edit')->with(['Productos'=>$Productos,'Title'=>'Editar productos','ActiveMenu'=>'productos']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Productos
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $productos = Productos::find($id);
     $productos->empresa_id = $request->empresa_id;
     $productos->proveedor_id = $request->proveedor_id;
     $productos->tipo_pieza = $request->tipo_pieza;
     $productos->nombre_producto = $request->nombre_producto;
     $productos->created_at = $request->created_at;
     $productos->updated_at = $request->updated_at;
     $productos->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $productos->update();
   return redirect('/admin/productos');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Productos
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Productos = Productos::find($id);
       $Productos->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Productos.index');
   }
}  
