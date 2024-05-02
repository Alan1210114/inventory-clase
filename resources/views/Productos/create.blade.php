
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Productos</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('productos.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="empresa_id" class="col-sm-4 control-label">empresa_id</label>
<input type="text" maxlength="20" name="empresa_id" id="empresa_id"  class="form-control" placeholder="empresa_id">
@if($errors->has('empresa_id'))
<div class="alert-danger">{{ $errors->first('empresa_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="proveedor_id" class="col-sm-4 control-label">proveedor_id</label>
<input type="text" maxlength="20" name="proveedor_id" id="proveedor_id"  class="form-control" placeholder="proveedor_id">
@if($errors->has('proveedor_id'))
<div class="alert-danger">{{ $errors->first('proveedor_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="tipo_pieza" class="col-sm-4 control-label">tipo_pieza</label>
<input type="text" maxlength="20" name="tipo_pieza" id="tipo_pieza"  class="form-control" placeholder="tipo_pieza">
@if($errors->has('tipo_pieza'))
<div class="alert-danger">{{ $errors->first('tipo_pieza') }}</div>
@endif
</div>
<div class="form-group">
<label for="nombre_producto" class="col-sm-4 control-label">nombre_producto</label>
<input type="text" maxlength="400" name="nombre_producto" id="nombre_producto"  class="form-control" placeholder="nombre_producto">
@if($errors->has('nombre_producto'))
<div class="alert-danger">{{ $errors->first('nombre_producto') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('productos.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection