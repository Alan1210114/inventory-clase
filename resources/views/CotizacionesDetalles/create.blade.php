
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo CotizacionesDetalles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('cotizacionesDetalles.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="cotizaciones_id" class="col-sm-4 control-label">cotizaciones_id</label>
<SELECT  name="cotizaciones_id" id="cotizaciones_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($CotizacionesList as $row )
 <option value="{{ $row->id }}" {{ ($row->id== $CotizacionesDetalles->cotizaciones_id?'selected':'') }}>{{ $row->nombre_clientes }}</option>
 @endforeach
</SELECT>
@if($errors->has('cotizaciones_id'))
<div class="alert-danger">{{ $errors->first('cotizaciones_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="producto_id" class="col-sm-4 control-label">producto_id</label>
<SELECT  name="producto_id" id="producto_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($ProductosList as $row )
 <option value="{{ $row->id }}" {{ ($row->id== $CotizacionesDetalles->producto_id?'selected':'') }}>{{ $row->nombre_producto }}</option>
 @endforeach
</SELECT>
@if($errors->has('producto_id'))
<div class="alert-danger">{{ $errors->first('producto_id') }}</div>
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
<label for="importe" class="col-sm-4 control-label">importe</label>
<input type="text" maxlength="14" name="importe" id="importe"  class="form-control" placeholder="importe">
@if($errors->has('importe'))
<div class="alert-danger">{{ $errors->first('importe') }}</div>
@endif
</div>
<div class="form-group">
<label for="precio_venta" class="col-sm-4 control-label">precio_venta</label>
<input type="text" maxlength="14" name="precio_venta" id="precio_venta"  class="form-control" placeholder="precio_venta">
@if($errors->has('precio_venta'))
<div class="alert-danger">{{ $errors->first('precio_venta') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('cotizacionesDetalles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection