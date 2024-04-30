<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\TipoPiezas;

class TipoPiezasController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $tipo_piezas = TipoPiezas::paginate(10);
       return view('TipoPiezas.index')->with(['TipoPiezasList'=>$tipo_piezas,'Title'=>'Lista de tipo_piezass','ActiveMenu'=>'tipo_piezass']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('TipoPiezas.create')->with(['Title'=>'Lista de tipo_piezas','ActiveMenu'=>'tipo_piezas']);
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
   $tipo_piezas = new TipoPiezas;
     $tipo_piezas->forma = $request->forma;
     $tipo_piezas->largo = $request->largo;
     $tipo_piezas->ancho = $request->ancho;
     $tipo_piezas->espesor = $request->espesor;
     $tipo_piezas->diametro = $request->diametro;
     $tipo_piezas->created_at = $request->created_at;
     $tipo_piezas->updated_at = $request->updated_at;
     $tipo_piezas->deleted_at = $request->deleted_at;
    $tipo_piezas->save();
   return redirect('/admin/tipo_piezas');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ TipoPiezas
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $tipo_piezas = TipoPiezas::find($id);
      }
      else{
        $tipo_piezas = TipoPiezas::All();
      }
      return $tipo_piezas;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ TipoPiezas
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $TipoPiezas = TipoPiezas::find($id);
      return view('tipo_piezas.edit')->with(['TipoPiezas'=>$TipoPiezas,'Title'=>'Editar tipo_piezas','ActiveMenu'=>'tipo_piezas']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ TipoPiezas
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $tipo_piezas = TipoPiezas::find($id);
     $tipo_piezas->forma = $request->forma;
     $tipo_piezas->largo = $request->largo;
     $tipo_piezas->ancho = $request->ancho;
     $tipo_piezas->espesor = $request->espesor;
     $tipo_piezas->diametro = $request->diametro;
     $tipo_piezas->created_at = $request->created_at;
     $tipo_piezas->updated_at = $request->updated_at;
     $tipo_piezas->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $tipo_piezas->update();
   return redirect('/admin/tipo_piezas');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\TipoPiezas
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $TipoPiezas = TipoPiezas::find($id);
       $TipoPiezas->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('TipoPiezas.index');
   }
}  
