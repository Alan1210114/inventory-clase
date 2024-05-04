<?php
namespace App\Http\Controllers;


 use Illuminate\Support\Facades\Validator;
 use Illuminate\Http\Request;
 use App\Models\Users;

class UsersController extends Controller
{
   /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */

   public function index()
   {
    $users = Users::paginate(10);
       return view('Users.index')->with(['UsersList'=>$users,'Title'=>'Lista de users','ActiveMenu'=>'users']);
   }

   /**
    * Show the form for creating a new resource.
    *

    * @return \Illuminate\Http\Response
    */
   public function create()
   {
     return view('Users.create')->with(['Title'=>'Lista de users','ActiveMenu'=>'users']);
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
   $users = new Users;
     $users->name = $request->name;
     $users->email = $request->email;
     $users->empresa_id = $request->empresa_id;
     $users->idRole = $request->idRole;
     $users->password = $request->password;
     $users->created_at = $request->created_at;
     $users->updated_at = $request->updated_at;
     //$users->deleted_at = $request->deleted_at;
    $users->save();
   return redirect('/admin/users');
   }
   

   /**
    * Display the specified resource.
    *
    * @param  \App\ Users
    * @return \Illuminate\Http\Response
    */
   public function show($id)
   {
      if ($id!='All') {
        $users = Users::find($id);
      }
      else{
        $users = Users::All();
      }
      return $users;
    }


   /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\ Users
    * @return \Illuminate\Http\Response
    */
   public function edit($id)
   {
     $Users = Users::find($id);
      return view('users.edit')->with(['Users'=>$Users,'Title'=>'Editar users','ActiveMenu'=>'users']);
   }

   /*
    * Update the specified resource in storage
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\ Users
    * @return \Illuminate\Http\Response
    */

   public function update(Request $request, $id)
   {
  $validator = Validator::make($request->all(), [
   ]);
   $users = Users::find($id);
     $users->name = $request->name;
     $users->email = $request->email;
     //$users->empresa_id = $request->empresa_id;
     $users->idRole = $request->idRole;
     $users->password = $request->password;
     $users->created_at = $request->created_at;
     $users->updated_at = $request->updated_at;
     //$users->deleted_at = $request->deleted_at;
 if ($validator->fails()) {
  return back()
     ->withErrors($validator->messages())
     ->withInput($request->input());
}
    $users->update();
   return redirect('/admin/users');
   }

   /**
    * Remove the specified resource from storage.
    *

    * @param  \App\models\Users
    * @return \Illuminate\Http\Response

    */
   public function destroy($id)
   {
      try {
      $Users = Users::find($id);
       $Users->delete();
          return ["Error "=>0];
       }catch(\Exception $e){
           return ["Error "=>$e->getCode(), "Message"=>$e->getMessage()]; }
       //return view('Users.index');
   }
}  
