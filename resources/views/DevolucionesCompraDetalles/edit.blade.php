
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar devoluciones_compra_detalles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('devoluciones_compra_detalles.update',$DevolucionesCompraDetalles->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="devoluciones_compra_id" class="col-sm-4 control-label">devoluciones_compra_id</label>
<input type="text" maxlength="20" name="devoluciones_compra_id" id="devoluciones_compra_id" value="{{ $DevolucionesCompraDetalles->devoluciones_compra_id }}" class="form-control" placeholder="devoluciones_compra_id">
@if($errors->has('devoluciones_compra_id'))
<div class="alert-danger">{{ $errors->first('devoluciones_compra_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="material_id" class="col-sm-4 control-label">material_id</label>
<SELECT  name="material_id" id="material_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($MaterialesList as $row )
 <option value="{{ $row->id }}"  >{{ $row->nombre_material }}</option>
 @endforeach
</SELECT>
@if($errors->has('material_id'))
<div class="alert-danger">{{ $errors->first('material_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="precio_costo" class="col-sm-4 control-label">precio_costo</label>
<input type="text" maxlength="14" name="precio_costo" id="precio_costo" value="{{ $DevolucionesCompraDetalles->precio_costo }}" class="form-control" placeholder="precio_costo">
@if($errors->has('precio_costo'))
<div class="alert-danger">{{ $errors->first('precio_costo') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('devolucionesCompraDetalles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection