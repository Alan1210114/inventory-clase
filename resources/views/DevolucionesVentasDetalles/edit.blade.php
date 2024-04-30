
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar devoluciones_ventas_detalles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('devoluciones_ventas_detalles.update',$DevolucionesVentasDetalles->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="devoluciones_venta_id" class="col-sm-4 control-label">devoluciones_venta_id</label>
<input type="text" maxlength="20" name="devoluciones_venta_id" id="devoluciones_venta_id" value="{{ $DevolucionesVentasDetalles->devoluciones_venta_id }}" class="form-control" placeholder="devoluciones_venta_id">
@if($errors->has('devoluciones_venta_id'))
<div class="alert-danger">{{ $errors->first('devoluciones_venta_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="producto_id" class="col-sm-4 control-label">producto_id</label>
<input type="text" maxlength="20" name="producto_id" id="producto_id" value="{{ $DevolucionesVentasDetalles->producto_id }}" class="form-control" placeholder="producto_id">
@if($errors->has('producto_id'))
<div class="alert-danger">{{ $errors->first('producto_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="cantidad" class="col-sm-4 control-label">cantidad</label>
<input type="text" maxlength="20" name="cantidad" id="cantidad" value="{{ $DevolucionesVentasDetalles->cantidad }}" class="form-control" placeholder="cantidad">
@if($errors->has('cantidad'))
<div class="alert-danger">{{ $errors->first('cantidad') }}</div>
@endif
</div>
<div class="form-group">
<label for="precio_venta" class="col-sm-4 control-label">precio_venta</label>
<input type="text" maxlength="14" name="precio_venta" id="precio_venta" value="{{ $DevolucionesVentasDetalles->precio_venta }}" class="form-control" placeholder="precio_venta">
@if($errors->has('precio_venta'))
<div class="alert-danger">{{ $errors->first('precio_venta') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('DevolucionesVentasDetalles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection