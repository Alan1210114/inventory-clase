<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Bitacora;

class BitacoraController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $bitacora = Bitacora::paginate(10);
       return view('Bitacora.index')->with(['BitacoraList'=>$bitacora,'Title'=>'Lista de bitacoras','ActiveMenu'=>'bitacoras']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Bitacora.create')->with(['Title'=>'Lista de bitacora','ActiveMenu'=>'bitacora']);
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
   $bitacora = new Bitacora;
     $bitacora->fecha_hora = $request->fecha_hora;
     $bitacora->user_id = $request->user_id;
     $bitacora->accion = $request->accion;
     $bitacora->datos = $request->datos;
     $bitacora->created_at = $request->created_at;
     $bitacora->updated_at = $request->updated_at;
    $bitacora->save();
   return redirect('/admin/bitacora');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Bitacora
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $bitacora = Bitacora::find($id);
      }
      else{
        $bitacora = Bitacora::All();
      }
      return $bitacora;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Bitacora
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Bitacora = Bitacora::find($id);
      return view('bitacora.edit')->with(['Bitacora'=>$Bitacora,'Title'=>'Editar bitacora','ActiveMenu'=>'bitacora']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Bitacora
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $bitacora = Bitacora::find($id);
     $bitacora->fecha_hora = $request->fecha_hora;
     $bitacora->user_id = $request->user_id;
     $bitacora->accion = $request->accion;
     $bitacora->datos = $request->datos;
     $bitacora->created_at = $request->created_at;
     $bitacora->updated_at = $request->updated_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $bitacora->update();
   return redirect('/admin/bitacora');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Bitacora
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Bitacora = Bitacora::find($id);
       $Bitacora->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Bitacora.index');
   }
}  
