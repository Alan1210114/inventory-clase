
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar facturas_clientes_detalles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('facturas_clientes_detalles.update',$FacturasClientesDetalles->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="facturas_clientes_id" class="col-sm-4 control-label">facturas_clientes_id</label>
<input type="text" maxlength="20" name="facturas_clientes_id" id="facturas_clientes_id" value="{{ $FacturasClientesDetalles->facturas_clientes_id }}" class="form-control" placeholder="facturas_clientes_id">
@if($errors->has('facturas_clientes_id'))
<div class="alert-danger">{{ $errors->first('facturas_clientes_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="producto_id" class="col-sm-4 control-label">producto_id</label>
<input type="text" maxlength="20" name="producto_id" id="producto_id" value="{{ $FacturasClientesDetalles->producto_id }}" class="form-control" placeholder="producto_id">
@if($errors->has('producto_id'))
<div class="alert-danger">{{ $errors->first('producto_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="lote" class="col-sm-4 control-label">lote</label>
<input type="text" maxlength="120" name="lote" id="lote" value="{{ $FacturasClientesDetalles->lote }}" class="form-control" placeholder="lote">
@if($errors->has('lote'))
<div class="alert-danger">{{ $errors->first('lote') }}</div>
@endif
</div>
<div class="form-group">
<label for="cantidad" class="col-sm-4 control-label">cantidad</label>
<input type="text" maxlength="11" name="cantidad" id="cantidad" value="{{ $FacturasClientesDetalles->cantidad }}" class="form-control" placeholder="cantidad">
@if($errors->has('cantidad'))
<div class="alert-danger">{{ $errors->first('cantidad') }}</div>
@endif
</div>
<div class="form-group">
<label for="importe" class="col-sm-4 control-label">importe</label>
<input type="text" maxlength="14" name="importe" id="importe" value="{{ $FacturasClientesDetalles->importe }}" class="form-control" placeholder="importe">
@if($errors->has('importe'))
<div class="alert-danger">{{ $errors->first('importe') }}</div>
@endif
</div>
<div class="form-group">
<label for="precio_venta" class="col-sm-4 control-label">precio_venta</label>
<input type="text" maxlength="14" name="precio_venta" id="precio_venta" value="{{ $FacturasClientesDetalles->precio_venta }}" class="form-control" placeholder="precio_venta">
@if($errors->has('precio_venta'))
<div class="alert-danger">{{ $errors->first('precio_venta') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('FacturasClientesDetalles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection