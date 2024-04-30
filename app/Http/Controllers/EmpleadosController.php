<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Empleados;

class EmpleadosController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $empleados = Empleados::paginate(10);
       return view('Empleados.index')->with(['EmpleadosList'=>$empleados,'Title'=>'Lista de empleadoss','ActiveMenu'=>'empleadoss']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Empleados.create')->with(['Title'=>'Lista de empleados','ActiveMenu'=>'empleados']);
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
   $empleados = new Empleados;
     $empleados->nombre = $request->nombre;
     $empleados->apellido_paterno = $request->apellido_paterno;
     $empleados->apellido_materno = $request->apellido_materno;
     $empleados->departamento_id = $request->departamento_id;
     $empleados->fecha_nacimiento = $request->fecha_nacimiento;
     $empleados->curp = $request->curp;
     $empleados->created_at = $request->created_at;
     $empleados->updated_at = $request->updated_at;
     $empleados->deleted_at = $request->deleted_at;
    $empleados->save();
   return redirect('/admin/empleados');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Empleados
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $empleados = Empleados::find($id);
      }
      else{
        $empleados = Empleados::All();
      }
      return $empleados;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Empleados
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Empleados = Empleados::find($id);
      return view('empleados.edit')->with(['Empleados'=>$Empleados,'Title'=>'Editar empleados','ActiveMenu'=>'empleados']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Empleados
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $empleados = Empleados::find($id);
     $empleados->nombre = $request->nombre;
     $empleados->apellido_paterno = $request->apellido_paterno;
     $empleados->apellido_materno = $request->apellido_materno;
     $empleados->departamento_id = $request->departamento_id;
     $empleados->fecha_nacimiento = $request->fecha_nacimiento;
     $empleados->curp = $request->curp;
     $empleados->created_at = $request->created_at;
     $empleados->updated_at = $request->updated_at;
     $empleados->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $empleados->update();
   return redirect('/admin/empleados');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Empleados
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Empleados = Empleados::find($id);
       $Empleados->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Empleados.index');
   }
}  
