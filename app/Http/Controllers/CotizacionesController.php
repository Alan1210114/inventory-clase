<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Cotizaciones;
 use App\Models\Clientes;

class CotizacionesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $cotizaciones = Cotizaciones::paginate(10);
       return view('cotizaciones.index')->with(['CotizacionesList'=>$cotizaciones,'Title'=>'Lista de cotizacioness','ActiveMenu'=>'cotizacioness']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $Clientess = Clientes::all();
     return view('cotizaciones.create')->with(['ClientesList'=>$Clientess,'Title'=>'Lista de cotizaciones','ActiveMenu'=>'cotizaciones']);
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
   $cotizaciones = new Cotizaciones;
     $cotizaciones->fecha = $request->fecha;
     $cotizaciones->cliente_id = $request->cliente_id;
     $cotizaciones->cliente_nombre = $request->cliente_nombre;
     $cotizaciones->sub_total = $request->sub_total;
     $cotizaciones->iva = $request->iva;
     $cotizaciones->total = $request->total;
     $cotizaciones->status = $request->status;
    $cotizaciones->save();
   return redirect('/admin/cotizaciones');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Cotizaciones
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $cotizaciones = Cotizaciones::find($id);
      }
      else{
        $cotizaciones = Cotizaciones::All();
      }
      return $cotizaciones;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Cotizaciones
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $Clientes = Clientes::all();
     $Cotizaciones = Cotizaciones::find($id);
      return view('cotizaciones.edit')->with(['Cotizaciones'=>$Cotizaciones,'ClientesList'=>$Clientes,'Title'=>'Editar cotizaciones','ActiveMenu'=>'cotizaciones']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Cotizaciones
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $cotizaciones = Cotizaciones::find($id);
     $cotizaciones->fecha = $request->fecha;
     $cotizaciones->cliente_id = $request->cliente_id;
     $cotizaciones->cliente_nombre = $request->cliente_nombre;
     $cotizaciones->sub_total = $request->sub_total;
     $cotizaciones->iva = $request->iva;
     $cotizaciones->total = $request->total;
     $cotizaciones->status = $request->status;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $cotizaciones->update();
   return redirect('/admin/cotizaciones');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Cotizaciones
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Cotizaciones = Cotizaciones::find($id);
       $Cotizaciones->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Cotizaciones.index');
   }
}  
