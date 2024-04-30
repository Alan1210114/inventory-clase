<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Empresas;

class EmpresasController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $empresas = Empresas::paginate(10);
       return view('Empresas.index')->with(['EmpresasList'=>$empresas,'Title'=>'Lista de empresass','ActiveMenu'=>'empresass']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Empresas.create')->with(['Title'=>'Lista de empresas','ActiveMenu'=>'empresas']);
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
   $empresas = new Empresas;
     $empresas->nombre_empresas = $request->nombre_empresas;
     $empresas->created_at = $request->created_at;
     $empresas->updated_at = $request->updated_at;
     $empresas->deleted_at = $request->deleted_at;
    $empresas->save();
   return redirect('/admin/empresas');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Empresas
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $empresas = Empresas::find($id);
      }
      else{
        $empresas = Empresas::All();
      }
      return $empresas;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Empresas
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Empresas = Empresas::find($id);
      return view('empresas.edit')->with(['Empresas'=>$Empresas,'Title'=>'Editar empresas','ActiveMenu'=>'empresas']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Empresas
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $empresas = Empresas::find($id);
     $empresas->nombre_empresas = $request->nombre_empresas;
     $empresas->created_at = $request->created_at;
     $empresas->updated_at = $request->updated_at;
     $empresas->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $empresas->update();
   return redirect('/admin/empresas');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Empresas
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Empresas = Empresas::find($id);
       $Empresas->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Empresas.index');
   }
}  
