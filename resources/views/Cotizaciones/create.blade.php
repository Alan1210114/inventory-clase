@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Cotizaciones</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('Cotizaciones.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="fecha" class="col-sm-4 control-label">fecha</label>
<input type="date" name="fecha" id="fecha"  class="form-control" placeholder="fecha">
@if($errors->has('fecha'))
<div class="alert-danger">{{ $errors->first('fecha') }}</div>
@endif
</div>
<div class="form-group">
<label for="cliente_id" class="col-sm-4 control-label">Cliente</label>
<SELECT  name="cliente_id" id="cliente_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($ClientesList as $row )
 <option value="{{ $row->id }}" {{ ($row->id== $Cotizaciones->cliente_id?'selected':'') }}>{{ $row->nombre_cliente }}</option>
 @endforeach
</SELECT>
@if($errors->has('cliente_id'))
<div class="alert-danger">{{ $errors->first('cliente_id') }}</div>
@endif
</div>
<div class="form-group">
<label for="cliente_nombre" class="col-sm-4 control-label">cliente_nombre</label>
<input type="text" maxlength="100" name="cliente_nombre" id="cliente_nombre"  class="form-control" placeholder="cliente_nombre">
@if($errors->has('cliente_nombre'))
<div class="alert-danger">{{ $errors->first('cliente_nombre') }}</div>
@endif
</div>
<div class="form-group">
<label for="sub_total" class="col-sm-4 control-label">sub_total</label>
<input type="text" maxlength="14" name="sub_total" id="sub_total"  class="form-control" placeholder="sub_total">
@if($errors->has('sub_total'))
<div class="alert-danger">{{ $errors->first('sub_total') }}</div>
@endif
</div>
<div class="form-group">
<label for="iva" class="col-sm-4 control-label">iva</label>
<input type="text" maxlength="14" name="iva" id="iva"  class="form-control" placeholder="iva">
@if($errors->has('iva'))
<div class="alert-danger">{{ $errors->first('iva') }}</div>
@endif
</div>
<div class="form-group">
<label for="total" class="col-sm-4 control-label">total</label>
<input type="text" maxlength="14" name="total" id="total"  class="form-control" placeholder="total">
@if($errors->has('total'))
<div class="alert-danger">{{ $errors->first('total') }}</div>
@endif
</div>
<div class="form-group">
@if($errors->has('status'))
<div class="alert-danger">{{ $errors->first('status') }}</div>
@endif
<label for="status" class="col-sm-4 control-label">status</label>
<SELECT  name="status" id="status" class="form-control">
 <option value="" >Seleccione una Opcion</option>
 <option value="1" {{ ($row->status==$Cotizaciones->status?'selected':'') }} >Enviada</option>
 <option value="2" {{ ($row->status==$Cotizaciones->status?'selected':'') }} >Procesada</option>
</SELECT>
@if($errors->has('status'))
<div class="alert-danger">{{ $errors->first('status') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('Cotizaciones.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection