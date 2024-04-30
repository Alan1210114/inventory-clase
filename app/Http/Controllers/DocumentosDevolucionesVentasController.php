<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\DocumentosDevolucionesVentas;

class DocumentosDevolucionesVentasController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $documentos_devoluciones_ventas = DocumentosDevolucionesVentas::paginate(10);
       return view('DocumentosDevolucionesVentas.index')->with(['DocumentosDevolucionesVentasList'=>$documentos_devoluciones_ventas,'Title'=>'Lista de documentos_devoluciones_ventass','ActiveMenu'=>'documentos_devoluciones_ventass']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('DocumentosDevolucionesVentas.create')->with(['Title'=>'Lista de documentos_devoluciones_ventas','ActiveMenu'=>'documentos_devoluciones_ventas']);
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
   $documentos_devoluciones_ventas = new DocumentosDevolucionesVentas;
     $documentos_devoluciones_ventas->nombre = $request->nombre;
     $documentos_devoluciones_ventas->devolucion_ventas_id = $request->devolucion_ventas_id;
     $documentos_devoluciones_ventas->fecha = $request->fecha;
     $documentos_devoluciones_ventas->created_at = $request->created_at;
     $documentos_devoluciones_ventas->updated_at = $request->updated_at;
     $documentos_devoluciones_ventas->deleted_at = $request->deleted_at;
    $documentos_devoluciones_ventas->save();
   return redirect('/admin/documentos_devoluciones_ventas');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ DocumentosDevolucionesVentas
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $documentos_devoluciones_ventas = DocumentosDevolucionesVentas::find($id);
      }
      else{
        $documentos_devoluciones_ventas = DocumentosDevolucionesVentas::All();
      }
      return $documentos_devoluciones_ventas;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ DocumentosDevolucionesVentas
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $DocumentosDevolucionesVentas = DocumentosDevolucionesVentas::find($id);
      return view('documentos_devoluciones_ventas.edit')->with(['DocumentosDevolucionesVentas'=>$DocumentosDevolucionesVentas,'Title'=>'Editar documentos_devoluciones_ventas','ActiveMenu'=>'documentos_devoluciones_ventas']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ DocumentosDevolucionesVentas
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $documentos_devoluciones_ventas = DocumentosDevolucionesVentas::find($id);
     $documentos_devoluciones_ventas->nombre = $request->nombre;
     $documentos_devoluciones_ventas->devolucion_ventas_id = $request->devolucion_ventas_id;
     $documentos_devoluciones_ventas->fecha = $request->fecha;
     $documentos_devoluciones_ventas->created_at = $request->created_at;
     $documentos_devoluciones_ventas->updated_at = $request->updated_at;
     $documentos_devoluciones_ventas->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $documentos_devoluciones_ventas->update();
   return redirect('/admin/documentos_devoluciones_ventas');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\DocumentosDevolucionesVentas
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $DocumentosDevolucionesVentas = DocumentosDevolucionesVentas::find($id);
       $DocumentosDevolucionesVentas->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('DocumentosDevolucionesVentas.index');
   }
}  
