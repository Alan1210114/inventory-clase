
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo FacturasProveedoresDetalles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('facturasProveedoresDetalles.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="facturas_proveedores_id" class="col-sm-4 control-label">facturas_proveedores_id</label>
<input type="text" maxlength="20" name="facturas_proveedores_id" id="facturas_proveedores_id"  class="form-control" placeholder="facturas_proveedores_id">
@if($errors->has('facturas_proveedores_id'))
<div class="alert-danger">{{ $errors->first('facturas_proveedores_id') }}</div>
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
<a class="btn btn-secondary" href="{{ route('facturasProveedoresDetalles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection