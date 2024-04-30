
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo Materiales</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('Materiales.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="nombre_material" class="col-sm-4 control-label">nombre_material</label>
<input type="text" maxlength="11" name="nombre_material" id="nombre_material"  class="form-control" placeholder="nombre_material">
@if($errors->has('nombre_material'))
<div class="alert-danger">{{ $errors->first('nombre_material') }}</div>
@endif
</div>
<div class="form-group">
<label for="metal" class="col-sm-4 control-label">metal</label>
<input type="text" maxlength="32" name="metal" id="metal"  class="form-control" placeholder="metal">
@if($errors->has('metal'))
<div class="alert-danger">{{ $errors->first('metal') }}</div>
@endif
</div>
<div class="form-group">
<label for="forma" class="col-sm-4 control-label">forma</label>
<input type="text" maxlength="44" name="forma" id="forma"  class="form-control" placeholder="forma">
@if($errors->has('forma'))
<div class="alert-danger">{{ $errors->first('forma') }}</div>
@endif
</div>
<div class="form-group">
<label for="medidas" class="col-sm-4 control-label">medidas</label>
<input type="text" maxlength="4294967295" name="medidas" id="medidas"  class="form-control" placeholder="medidas">
@if($errors->has('medidas'))
<div class="alert-danger">{{ $errors->first('medidas') }}</div>
@endif
</div>
<div class="form-group">
<label for="precio_costo" class="col-sm-4 control-label">precio_costo</label>
<input type="text" maxlength="14" name="precio_costo" id="precio_costo"  class="form-control" placeholder="precio_costo">
@if($errors->has('precio_costo'))
<div class="alert-danger">{{ $errors->first('precio_costo') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('Materiales.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection