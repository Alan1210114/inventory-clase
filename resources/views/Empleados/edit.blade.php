
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar empleados</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('empleados.update',$Empleados->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="nombre" class="col-sm-4 control-label">nombre</label>
<input type="text" maxlength="200" name="nombre" id="nombre" value="{{ $Empleados->nombre }}" class="form-control" placeholder="nombre">
@if($errors->has('nombre'))
<div class="alert-danger">{{ $errors->first('nombre') }}</div>
@endif
</div>
<div class="form-group">
<label for="apellido_paterno" class="col-sm-4 control-label">apellido_paterno</label>
<input type="text" maxlength="200" name="apellido_paterno" id="apellido_paterno" value="{{ $Empleados->apellido_paterno }}" class="form-control" placeholder="apellido_paterno">
@if($errors->has('apellido_paterno'))
<div class="alert-danger">{{ $errors->first('apellido_paterno') }}</div>
@endif
</div>
<div class="form-group">
<label for="apellido_materno" class="col-sm-4 control-label">apellido_materno</label>
<input type="text" maxlength="200" name="apellido_materno" id="apellido_materno" value="{{ $Empleados->apellido_materno }}" class="form-control" placeholder="apellido_materno">
@if($errors->has('apellido_materno'))
<div class="alert-danger">{{ $errors->first('apellido_materno') }}</div>
@endif
</div>
<div class="form-group">
<label for="departamento_id" class="col-sm-4 control-label">departamento_id</label>
<input type="text" maxlength="20" name="departamento_id" id="departamento_id" value="{{ $Empleados->departamento_id }}" class="form-control" placeholder="departamento_id">
@if($errors->has('departamento_id'))
<div class="alert-danger">{{ $errors->first('departamento_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="fecha_nacimiento" class="col-sm-4 control-label">fecha_nacimiento</label>
<input type="date" name="fecha_nacimiento" id="fecha_nacimiento" value="{{ $Empleados->fecha_nacimiento }}" class="form-control" placeholder="fecha_nacimiento">
@if($errors->has('fecha_nacimiento'))
<div class="alert-danger">{{ $errors->first('fecha_nacimiento') }}</div>
@endif
</div>
<div class="form-group">
<label for="curp" class="col-sm-4 control-label">curp</label>
<input type="text" maxlength="80" name="curp" id="curp" value="{{ $Empleados->curp }}" class="form-control" placeholder="curp">
@if($errors->has('curp'))
<div class="alert-danger">{{ $errors->first('curp') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('Empleados.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection