
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar devoluciones_compra</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('devoluciones_compra.update',$DevolucionesCompra->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="fecha" class="col-sm-4 control-label">fecha</label>
<input type="date" name="fecha" id="fecha" value="{{ $DevolucionesCompra->fecha }}" class="form-control" placeholder="fecha">
@if($errors->has('fecha'))
<div class="alert-danger">{{ $errors->first('fecha') }}</div>
@endif
</div>
<div class="form-group">
<label for="proveedor_id" class="col-sm-4 control-label">proveedor_id</label>
<SELECT  name="proveedor_id" id="proveedor_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($ProveedoresList as $row )
 <option value="{{ $row->id }}"  >{{ $row->nombre_proveedor }}</option>
 @endforeach
</SELECT>
@if($errors->has('proveedor_id'))
<div class="alert-danger">{{ $errors->first('proveedor_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="total" class="col-sm-4 control-label">total</label>
<input type="text" maxlength="14" name="total" id="total" value="{{ $DevolucionesCompra->total }}" class="form-control" placeholder="total">
@if($errors->has('total'))
<div class="alert-danger">{{ $errors->first('total') }}</div>
@endif
</div>
<div class="form-group">
<label for="factura_id" class="col-sm-4 control-label">factura_id</label>
<SELECT  name="factura_id" id="factura_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($FacturasproveedoresList as $row )
 <option value="{{ $row->id }}"  >{{ $row->num_factura }}</option>
 @endforeach
</SELECT>
@if($errors->has('factura_id'))
<div class="alert-danger">{{ $errors->first('factura_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('devolucionesCompra.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection