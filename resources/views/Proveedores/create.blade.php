
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Proveedores</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('proveedores.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="nombre_proveedor" class="col-sm-4 control-label">nombre_proveedor</label>
<input type="text" maxlength="400" name="nombre_proveedor" id="nombre_proveedor"  class="form-control" placeholder="nombre_proveedor">
@if($errors->has('nombre_proveedor'))
<div class="alert-danger">{{ $errors->first('nombre_proveedor') }}</div>
@endif
</div>
<div class="form-group">
<label for="empresa_id" class="col-sm-4 control-label">empresa_id</label>
<input type="text" maxlength="20" name="empresa_id" id="empresa_id"  class="form-control" placeholder="empresa_id">
@if($errors->has('empresa_id'))
<div class="alert-danger">{{ $errors->first('empresa_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('proveedores.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection