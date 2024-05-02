
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar documentos_devoluciones_compras</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('documentos_devoluciones_compras.update',$DocumentosDevolucionesCompras->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="nombre" class="col-sm-4 control-label">nombre</label>
<input type="text" maxlength="400" name="nombre" id="nombre" value="{{ $DocumentosDevolucionesCompras->nombre }}" class="form-control" placeholder="nombre">
@if($errors->has('nombre'))
<div class="alert-danger">{{ $errors->first('nombre') }}</div>
@endif
</div>
<div class="form-group">
<label for="devolucion_compra_id" class="col-sm-4 control-label">devolucion_compra_id</label>
<input type="text" maxlength="20" name="devolucion_compra_id" id="devolucion_compra_id" value="{{ $DocumentosDevolucionesCompras->devolucion_compra_id }}" class="form-control" placeholder="devolucion_compra_id">
@if($errors->has('devolucion_compra_id'))
<div class="alert-danger">{{ $errors->first('devolucion_compra_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="fecha" class="col-sm-4 control-label">fecha</label>
<input type="date" name="fecha" id="fecha" value="{{ $DocumentosDevolucionesCompras->fecha }}" class="form-control" placeholder="fecha">
@if($errors->has('fecha'))
<div class="alert-danger">{{ $errors->first('fecha') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('documentosDevolucionesCompras.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection