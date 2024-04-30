
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar clientes</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('clientes.update',$Clientes->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="nombre_cliente" class="col-sm-4 control-label">Nombre Cliente</label>
<input type="text" maxlength="100" name="nombre_cliente" id="nombre_cliente" value="{{ $Clientes->nombre_cliente }}" class="form-control" placeholder="nombre_cliente">
@if($errors->has('nombre_cliente'))
<div class="alert-danger">{{ $errors->first('nombre_cliente') }}</div>
@endif
</div>
<div class="form-group">
<label for="empresa_id" class="col-sm-4 control-label">Empresa</label>
<SELECT  name="empresa_id" id="empresa_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($EmpresasList as $row )
 <option value="{{ $row->id }}"  >{{ $row->nombre_empresas }}</option>
 @endforeach
</SELECT>
@if($errors->has('empresa_id'))
<div class="alert-danger">{{ $errors->first('empresa_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('Clientes.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection