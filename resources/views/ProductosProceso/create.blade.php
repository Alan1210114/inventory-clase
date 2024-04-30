
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo ProductosProceso</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('ProductosProceso.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="producto_id" class="col-sm-4 control-label">producto_id</label>
<input type="text" maxlength="20" name="producto_id" id="producto_id"  class="form-control" placeholder="producto_id">
@if($errors->has('producto_id'))
<div class="alert-danger">{{ $errors->first('producto_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="lote" class="col-sm-4 control-label">lote</label>
<input type="text" maxlength="120" name="lote" id="lote"  class="form-control" placeholder="lote">
@if($errors->has('lote'))
<div class="alert-danger">{{ $errors->first('lote') }}</div>
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
<label for="precio_costo" class="col-sm-4 control-label">precio_costo</label>
<input type="text" maxlength="14" name="precio_costo" id="precio_costo"  class="form-control" placeholder="precio_costo">
@if($errors->has('precio_costo'))
<div class="alert-danger">{{ $errors->first('precio_costo') }}</div>
@endif
</div>
<div class="form-group">
<label for="precio_venta" class="col-sm-4 control-label">precio_venta</label>
<input type="text" maxlength="14" name="precio_venta" id="precio_venta"  class="form-control" placeholder="precio_venta">
@if($errors->has('precio_venta'))
<div class="alert-danger">{{ $errors->first('precio_venta') }}</div>
@endif
</div>
<div class="form-group">
<label for="cantidad" class="col-sm-4 control-label">cantidad</label>
<input type="text" maxlength="11" name="cantidad" id="cantidad"  class="form-control" placeholder="cantidad">
@if($errors->has('cantidad'))
<div class="alert-danger">{{ $errors->first('cantidad') }}</div>
@endif
</div>
<div class="form-group">
<label for="status" class="col-sm-4 control-label">status</label>
<input type="text" maxlength="40" name="status" id="status"  class="form-control" placeholder="status">
@if($errors->has('status'))
<div class="alert-danger">{{ $errors->first('status') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('ProductosProceso.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection