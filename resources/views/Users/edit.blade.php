
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar users</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('users.update',$Users->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="name" class="col-sm-4 control-label">name</label>
<input type="text" maxlength="400" name="name" id="name" value="{{ $Users->name }}" class="form-control" placeholder="name">
@if($errors->has('name'))
<div class="alert-danger">{{ $errors->first('name') }}</div>
@endif
</div>
<div class="form-group">
<label for="email" class="col-sm-4 control-label">email</label>
<input type="text" maxlength="600" name="email" id="email" value="{{ $Users->email }}" class="form-control" placeholder="email">
@if($errors->has('email'))
<div class="alert-danger">{{ $errors->first('email') }}</div>
@endif
</div>
<div class="form-group">
<label for="email" class="col-sm-4 control-label">password</label>
<input type="password" maxlength="600" name="password" id="password" value="{{ $Users->password }}" class="form-control" placeholder="password">
@if($errors->has('password'))
<div class="alert-danger">{{ $errors->first('password') }}</div>
@endif
</div>
<div class="form-group">
<label for="idRole" class="col-sm-4 control-label">idRole</label>
<input type="text" maxlength="20" name="idRole" id="idRole" value="{{ $Users->idRole }}" class="form-control" placeholder="idRole">
@if($errors->has('idRole'))
<div class="alert-danger">{{ $errors->first('idRole') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('users.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection