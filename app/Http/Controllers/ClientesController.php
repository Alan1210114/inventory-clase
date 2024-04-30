<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Clientes;
 use App\Models\Empresas;

class ClientesController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $clientes = Clientes::paginate(10);
       return view('Clientes.index')->with(['ClientesList'=>$clientes,'Title'=>'Lista de clientess','ActiveMenu'=>'clientess']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    $Empresass = Empresas::all();
     return view('Clientes.create')->with(['EmpresasList'=>$Empresass,'Title'=>'Lista de clientes','ActiveMenu'=>'clientes']);
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
   $clientes = new Clientes;
     $clientes->nombre_cliente = $request->nombre_cliente;
     $clientes->empresa_id = $request->empresa_id;
    $clientes->save();
   return redirect('/admin/clientes');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Clientes
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $clientes = Clientes::find($id);
      }
      else{
        $clientes = Clientes::All();
      }
      return $clientes;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Clientes
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
    $Empresas = Empresas::all();
     $Clientes = Clientes::find($id);
      return view('clientes.edit')->with(['Clientes'=>$Clientes,'EmpresasList'=>$Empresas,'Title'=>'Editar clientes','ActiveMenu'=>'clientes']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Clientes
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $clientes = Clientes::find($id);
     $clientes->nombre_cliente = $request->nombre_cliente;
     $clientes->empresa_id = $request->empresa_id;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $clientes->update();
   return redirect('/admin/clientes');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Clientes
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Clientes = Clientes::find($id);
       $Clientes->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Clientes.index');
   }
}  
