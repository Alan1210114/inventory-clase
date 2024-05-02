
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar orden_compra</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('orden_compra.update',$OrdenCompra->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="fecha" class="col-sm-4 control-label">fecha</label>
<input type="date" name="fecha" id="fecha" value="{{ $OrdenCompra->fecha }}" class="form-control" placeholder="fecha">
@if($errors->has('fecha'))
<div class="alert-danger">{{ $errors->first('fecha') }}</div>
@endif
</div>
<div class="form-group">
<label for="proveedor_id" class="col-sm-4 control-label">proveedor_id</label>
<input type="text" maxlength="20" name="proveedor_id" id="proveedor_id" value="{{ $OrdenCompra->proveedor_id }}" class="form-control" placeholder="proveedor_id">
@if($errors->has('proveedor_id'))
<div class="alert-danger">{{ $errors->first('proveedor_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('ordenCompra.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection