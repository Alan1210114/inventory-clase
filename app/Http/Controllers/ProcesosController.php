<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Procesos;

class ProcesosController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $procesos = Procesos::paginate(10);
       return view('Procesos.index')->with(['ProcesosList'=>$procesos,'Title'=>'Lista de procesoss','ActiveMenu'=>'procesoss']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Procesos.create')->with(['Title'=>'Lista de procesos','ActiveMenu'=>'procesos']);
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
   $procesos = new Procesos;
     $procesos->fecha_hora_inicio = $request->fecha_hora_inicio;
     $procesos->tipo_proceso = $request->tipo_proceso;
     $procesos->operador_id = $request->operador_id;
     $procesos->material_id = $request->material_id;
     $procesos->cantidad = $request->cantidad;
     $procesos->producto_resultante = $request->producto_resultante;
     $procesos->tipo_pieza_id = $request->tipo_pieza_id;
     $procesos->fecha_hora_terminacion = $request->fecha_hora_terminacion;
     $procesos->created_at = $request->created_at;
     $procesos->updated_at = $request->updated_at;
     $procesos->deleted_at = $request->deleted_at;
    $procesos->save();
   return redirect('/admin/procesos');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Procesos
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $procesos = Procesos::find($id);
      }
      else{
        $procesos = Procesos::All();
      }
      return $procesos;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Procesos
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Procesos = Procesos::find($id);
      return view('procesos.edit')->with(['Procesos'=>$Procesos,'Title'=>'Editar procesos','ActiveMenu'=>'procesos']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Procesos
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $procesos = Procesos::find($id);
     $procesos->fecha_hora_inicio = $request->fecha_hora_inicio;
     $procesos->tipo_proceso = $request->tipo_proceso;
     $procesos->operador_id = $request->operador_id;
     $procesos->material_id = $request->material_id;
     $procesos->cantidad = $request->cantidad;
     $procesos->producto_resultante = $request->producto_resultante;
     $procesos->tipo_pieza_id = $request->tipo_pieza_id;
     $procesos->fecha_hora_terminacion = $request->fecha_hora_terminacion;
     $procesos->created_at = $request->created_at;
     $procesos->updated_at = $request->updated_at;
     $procesos->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $procesos->update();
   return redirect('/admin/procesos');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Procesos
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Procesos = Procesos::find($id);
       $Procesos->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Procesos.index');
   }
}  
