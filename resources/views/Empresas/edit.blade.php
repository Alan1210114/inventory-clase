
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar empresa</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('empresas.update',$Empresas->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="nombre_empresa" class="col-sm-4 control-label">nombre_empresa</label>
<input type="text" maxlength="400" name="nombre_empresa" id="nombre_empresa" value="{{ $Empresas->nombre_empresa }}" class="form-control" placeholder="nombre_empresa">
@if($errors->has('nombre_empresas'))
<div class="alert-danger">{{ $errors->first('nombre_empresa') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('empresas.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection