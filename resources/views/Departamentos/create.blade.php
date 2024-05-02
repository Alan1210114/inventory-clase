
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Departamentos</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('departamentos.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="nombre_departamento" class="col-sm-4 control-label">nombre_departamento</label>
<input type="text" maxlength="400" name="nombre_departamento" id="nombre_departamento"  class="form-control" placeholder="nombre_departamento">
@if($errors->has('nombre_departamento'))
<div class="alert-danger">{{ $errors->first('nombre_departamento') }}</div>
@endif
</div>
<div class="form-group">
<label for="empresa_id" class="col-sm-4 control-label">empresa_id</label>
<SELECT  name="empresa_id" id="empresa_id" class="form-control">
 <option value="">Seleccione una Opcion</option>
 @foreach($EmpresasList as $row )
 <option value="{{ $row->id }}" {{ ($row->id== $Departamentos->empresa_id?'selected':'') }}>{{ $row->nombre_empresas }}</option>
 @endforeach
</SELECT>
@if($errors->has('empresa_id'))
<div class="alert-danger">{{ $errors->first('empresa_id') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('departamentos.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection