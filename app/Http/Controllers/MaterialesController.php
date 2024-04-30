<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Materiales;

class MaterialesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $materiales = Materiales::paginate(10);
       return view('Materiales.index')->with(['MaterialesList'=>$materiales,'Title'=>'Lista de materialess','ActiveMenu'=>'materialess']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Materiales.create')->with(['Title'=>'Lista de materiales','ActiveMenu'=>'materiales']);
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
   $materiales = new Materiales;
     $materiales->nombre_material = $request->nombre_material;
     $materiales->metal = $request->metal;
     $materiales->forma = $request->forma;
     $materiales->medidas = $request->medidas;
     $materiales->precio_costo = $request->precio_costo;
     $materiales->created_at = $request->created_at;
     $materiales->updated_at = $request->updated_at;
     $materiales->deleted_at = $request->deleted_at;
    $materiales->save();
   return redirect('/admin/materiales');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Materiales
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $materiales = Materiales::find($id);
      }
      else{
        $materiales = Materiales::All();
      }
      return $materiales;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Materiales
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Materiales = Materiales::find($id);
      return view('materiales.edit')->with(['Materiales'=>$Materiales,'Title'=>'Editar materiales','ActiveMenu'=>'materiales']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Materiales
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $materiales = Materiales::find($id);
     $materiales->nombre_material = $request->nombre_material;
     $materiales->metal = $request->metal;
     $materiales->forma = $request->forma;
     $materiales->medidas = $request->medidas;
     $materiales->precio_costo = $request->precio_costo;
     $materiales->created_at = $request->created_at;
     $materiales->updated_at = $request->updated_at;
     $materiales->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $materiales->update();
   return redirect('/admin/materiales');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Materiales
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Materiales = Materiales::find($id);
       $Materiales->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Materiales.index');
   }
}  
