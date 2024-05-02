
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Procesos</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('procesos.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="fecha_hora_inicio" class="col-sm-4 control-label">fecha_hora_inicio</label>
<input type="text" maxlength="19" name="fecha_hora_inicio" id="fecha_hora_inicio"  class="form-control" placeholder="fecha_hora_inicio">
@if($errors->has('fecha_hora_inicio'))
<div class="alert-danger">{{ $errors->first('fecha_hora_inicio') }}</div>
@endif
</div>
<div class="form-group">
<label for="tipo_proceso" class="col-sm-4 control-label">tipo_proceso</label>
<input type="text" maxlength="200" name="tipo_proceso" id="tipo_proceso"  class="form-control" placeholder="tipo_proceso">
@if($errors->has('tipo_proceso'))
<div class="alert-danger">{{ $errors->first('tipo_proceso') }}</div>
@endif
</div>
<div class="form-group">
<label for="operador_id" class="col-sm-4 control-label">operador_id</label>
<input type="text" maxlength="20" name="operador_id" id="operador_id"  class="form-control" placeholder="operador_id">
@if($errors->has('operador_id'))
<div class="alert-danger">{{ $errors->first('operador_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="material_id" class="col-sm-4 control-label">material_id</label>
<input type="text" maxlength="20" name="material_id" id="material_id"  class="form-control" placeholder="material_id">
@if($errors->has('material_id'))
<div class="alert-danger">{{ $errors->first('material_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="producto_resultante" class="col-sm-4 control-label">producto_resultante</label>
<input type="text" maxlength="20" name="producto_resultante" id="producto_resultante"  class="form-control" placeholder="producto_resultante">
@if($errors->has('producto_resultante'))
<div class="alert-danger">{{ $errors->first('producto_resultante') }}</div>
@endif
</div>
<div class="form-group">
<label for="tipo_pieza_id" class="col-sm-4 control-label">tipo_pieza_id</label>
<input type="text" maxlength="20" name="tipo_pieza_id" id="tipo_pieza_id"  class="form-control" placeholder="tipo_pieza_id">
@if($errors->has('tipo_pieza_id'))
<div class="alert-danger">{{ $errors->first('tipo_pieza_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="fecha_hora_terminacion" class="col-sm-4 control-label">fecha_hora_terminacion</label>
<input type="text" maxlength="19" name="fecha_hora_terminacion" id="fecha_hora_terminacion"  class="form-control" placeholder="fecha_hora_terminacion">
@if($errors->has('fecha_hora_terminacion'))
<div class="alert-danger">{{ $errors->first('fecha_hora_terminacion') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('procesos.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection