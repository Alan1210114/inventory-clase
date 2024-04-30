<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Departamentos;
 use App\Models\Empresas;

class DepartamentosController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $departamentos = Departamentos::paginate(10);
       return view('Departamentos.index')->with(['DepartamentosList'=>$departamentos,'Title'=>'Lista de departamentoss','ActiveMenu'=>'departamentoss']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $Empresass = Empresas::all();
     return view('Departamentos.create')->with(['EmpresasList'=>$Empresass,'Title'=>'Lista de departamentos','ActiveMenu'=>'departamentos']);
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
   $departamentos = new Departamentos;
     $departamentos->nombre_departamento = $request->nombre_departamento;
     $departamentos->empresa_id = $request->empresa_id;
    $departamentos->save();
   return redirect('/admin/departamentos');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Departamentos
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $departamentos = Departamentos::find($id);
      }
      else{
        $departamentos = Departamentos::All();
      }
      return $departamentos;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Departamentos
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $Empresas = Empresas::all();
     $Departamentos = Departamentos::find($id);
      return view('departamentos.edit')->with(['Departamentos'=>$Departamentos,'EmpresasList'=>$Empresas,'Title'=>'Editar departamentos','ActiveMenu'=>'departamentos']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Departamentos
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $departamentos = Departamentos::find($id);
     $departamentos->nombre_departamento = $request->nombre_departamento;
     $departamentos->empresa_id = $request->empresa_id;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $departamentos->update();
   return redirect('/admin/departamentos');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Departamentos
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Departamentos = Departamentos::find($id);
       $Departamentos->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Departamentos.index');
   }
}  
