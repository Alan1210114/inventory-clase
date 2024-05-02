
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Roles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('roles.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="nombreRol" class="col-sm-4 control-label">nombreRol</label>
<input type="text" maxlength="800" name="nombreRol" id="nombreRol"  class="form-control" placeholder="nombreRol">
@if($errors->has('nombreRol'))
<div class="alert-danger">{{ $errors->first('nombreRol') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('roles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection