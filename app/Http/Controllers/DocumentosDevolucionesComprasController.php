<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\DocumentosDevolucionesCompras;

class DocumentosDevolucionesComprasController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $documentos_devoluciones_compras = DocumentosDevolucionesCompras::paginate(10);
       return view('DocumentosDevolucionesCompras.index')->with(['DocumentosDevolucionesComprasList'=>$documentos_devoluciones_compras,'Title'=>'Lista de documentos_devoluciones_comprass','ActiveMenu'=>'documentos_devoluciones_comprass']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('DocumentosDevolucionesCompras.create')->with(['Title'=>'Lista de documentos_devoluciones_compras','ActiveMenu'=>'documentos_devoluciones_compras']);
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
   $documentos_devoluciones_compras = new DocumentosDevolucionesCompras;
     $documentos_devoluciones_compras->nombre = $request->nombre;
     $documentos_devoluciones_compras->devolucion_compra_id = $request->devolucion_compra_id;
     $documentos_devoluciones_compras->fecha = $request->fecha;
     $documentos_devoluciones_compras->created_at = $request->created_at;
     $documentos_devoluciones_compras->updated_at = $request->updated_at;
     $documentos_devoluciones_compras->deleted_at = $request->deleted_at;
    $documentos_devoluciones_compras->save();
   return redirect('/admin/documentos_devoluciones_compras');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ DocumentosDevolucionesCompras
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $documentos_devoluciones_compras = DocumentosDevolucionesCompras::find($id);
      }
      else{
        $documentos_devoluciones_compras = DocumentosDevolucionesCompras::All();
      }
      return $documentos_devoluciones_compras;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ DocumentosDevolucionesCompras
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $DocumentosDevolucionesCompras = DocumentosDevolucionesCompras::find($id);
      return view('documentos_devoluciones_compras.edit')->with(['DocumentosDevolucionesCompras'=>$DocumentosDevolucionesCompras,'Title'=>'Editar documentos_devoluciones_compras','ActiveMenu'=>'documentos_devoluciones_compras']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ DocumentosDevolucionesCompras
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $documentos_devoluciones_compras = DocumentosDevolucionesCompras::find($id);
     $documentos_devoluciones_compras->nombre = $request->nombre;
     $documentos_devoluciones_compras->devolucion_compra_id = $request->devolucion_compra_id;
     $documentos_devoluciones_compras->fecha = $request->fecha;
     $documentos_devoluciones_compras->created_at = $request->created_at;
     $documentos_devoluciones_compras->updated_at = $request->updated_at;
     $documentos_devoluciones_compras->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $documentos_devoluciones_compras->update();
   return redirect('/admin/documentos_devoluciones_compras');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\DocumentosDevolucionesCompras
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $DocumentosDevolucionesCompras = DocumentosDevolucionesCompras::find($id);
       $DocumentosDevolucionesCompras->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('DocumentosDevolucionesCompras.index');
   }
}  
