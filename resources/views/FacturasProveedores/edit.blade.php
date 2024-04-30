
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar facturas_proveedores</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('facturas_proveedores.update',$FacturasProveedores->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="fecha" class="col-sm-4 control-label">fecha</label>
<input type="date" name="fecha" id="fecha" value="{{ $FacturasProveedores->fecha }}" class="form-control" placeholder="fecha">
@if($errors->has('fecha'))
<div class="alert-danger">{{ $errors->first('fecha') }}</div>
@endif
</div>
<div class="form-group">
<label for="proveedor_id" class="col-sm-4 control-label">proveedor_id</label>
<input type="text" maxlength="20" name="proveedor_id" id="proveedor_id" value="{{ $FacturasProveedores->proveedor_id }}" class="form-control" placeholder="proveedor_id">
@if($errors->has('proveedor_id'))
<div class="alert-danger">{{ $errors->first('proveedor_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="sub_total" class="col-sm-4 control-label">sub_total</label>
<input type="text" maxlength="14" name="sub_total" id="sub_total" value="{{ $FacturasProveedores->sub_total }}" class="form-control" placeholder="sub_total">
@if($errors->has('sub_total'))
<div class="alert-danger">{{ $errors->first('sub_total') }}</div>
@endif
</div>
<div class="form-group">
<label for="iva" class="col-sm-4 control-label">iva</label>
<input type="text" maxlength="14" name="iva" id="iva" value="{{ $FacturasProveedores->iva }}" class="form-control" placeholder="iva">
@if($errors->has('iva'))
<div class="alert-danger">{{ $errors->first('iva') }}</div>
@endif
</div>
<div class="form-group">
<label for="total" class="col-sm-4 control-label">total</label>
<input type="text" maxlength="14" name="total" id="total" value="{{ $FacturasProveedores->total }}" class="form-control" placeholder="total">
@if($errors->has('total'))
<div class="alert-danger">{{ $errors->first('total') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('FacturasProveedores.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection