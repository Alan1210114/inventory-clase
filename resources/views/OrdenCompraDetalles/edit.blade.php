
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar orden_compra_detalles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('orden_compra_detalles.update',$OrdenCompraDetalles->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="orden_compra_id" class="col-sm-4 control-label">orden_compra_id</label>
<input type="text" maxlength="20" name="orden_compra_id" id="orden_compra_id" value="{{ $OrdenCompraDetalles->orden_compra_id }}" class="form-control" placeholder="orden_compra_id">
@if($errors->has('orden_compra_id'))
<div class="alert-danger">{{ $errors->first('orden_compra_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="material_id" class="col-sm-4 control-label">material_id</label>
<input type="text" maxlength="20" name="material_id" id="material_id" value="{{ $OrdenCompraDetalles->material_id }}" class="form-control" placeholder="material_id">
@if($errors->has('material_id'))
<div class="alert-danger">{{ $errors->first('material_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('ordenCompraDetalles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection