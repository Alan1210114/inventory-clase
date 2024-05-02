
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Bitacora</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('bitacora.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="fecha_hora" class="col-sm-4 control-label">fecha_hora</label>
<input type="text" maxlength="19" name="fecha_hora" id="fecha_hora"  class="form-control" placeholder="fecha_hora">
@if($errors->has('fecha_hora'))
<div class="alert-danger">{{ $errors->first('fecha_hora') }}</div>
@endif
</div>
<div class="form-group">
<label for="user_id" class="col-sm-4 control-label">user_id</label>
<input type="text" maxlength="20" name="user_id" id="user_id"  class="form-control" placeholder="user_id">
@if($errors->has('user_id'))
<div class="alert-danger">{{ $errors->first('user_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="accion" class="col-sm-4 control-label">accion</label>
<input type="text" maxlength="262140" name="accion" id="accion"  class="form-control" placeholder="accion">
@if($errors->has('accion'))
<div class="alert-danger">{{ $errors->first('accion') }}</div>
@endif
</div>
<div class="form-group">
<label for="datos" class="col-sm-4 control-label">datos</label>
<input type="text" maxlength="262140" name="datos" id="datos"  class="form-control" placeholder="datos">
@if($errors->has('datos'))
<div class="alert-danger">{{ $errors->first('datos') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('bitacora.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection