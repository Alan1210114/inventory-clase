
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo PermisosRoles</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('permisosRoles.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="idRol" class="col-sm-4 control-label">idRol</label>
<input type="text" maxlength="11" name="idRol" id="idRol"  class="form-control" placeholder="idRol">
@if($errors->has('idRol'))
<div class="alert-danger">{{ $errors->first('idRol') }}</div>
@endif
</div>
<div class="form-group">
<label for="isgroup" class="col-sm-4 control-label">isgroup</label>
<input type="text" maxlength="4" name="isgroup" id="isgroup"  class="form-control" placeholder="isgroup">
@if($errors->has('isgroup'))
<div class="alert-danger">{{ $errors->first('isgroup') }}</div>
@endif
</div>
<div class="form-group">
<label for="orden" class="col-sm-4 control-label">orden</label>
<input type="text" maxlength="4" name="orden" id="orden"  class="form-control" placeholder="orden">
@if($errors->has('orden'))
<div class="alert-danger">{{ $errors->first('orden') }}</div>
@endif
</div>
<div class="form-group">
<label for="idPermiso" class="col-sm-4 control-label">idPermiso</label>
<input type="text" maxlength="11" name="idPermiso" id="idPermiso"  class="form-control" placeholder="idPermiso">
@if($errors->has('idPermiso'))
<div class="alert-danger">{{ $errors->first('idPermiso') }}</div>
@endif
</div>
<div class="form-group">
<label for="Listar" class="col-sm-4 control-label">Listar</label>
<input type="text" maxlength="4" name="Listar" id="Listar"  class="form-control" placeholder="Listar">
@if($errors->has('Listar'))
<div class="alert-danger">{{ $errors->first('Listar') }}</div>
@endif
</div>
<div class="form-group">
<label for="Ver" class="col-sm-4 control-label">Ver</label>
<input type="text" maxlength="4" name="Ver" id="Ver"  class="form-control" placeholder="Ver">
@if($errors->has('Ver'))
<div class="alert-danger">{{ $errors->first('Ver') }}</div>
@endif
</div>
<div class="form-group">
<label for="Agregar" class="col-sm-4 control-label">Agregar</label>
<input type="text" maxlength="4" name="Agregar" id="Agregar"  class="form-control" placeholder="Agregar">
@if($errors->has('Agregar'))
<div class="alert-danger">{{ $errors->first('Agregar') }}</div>
@endif
</div>
<div class="form-group">
<label for="Modificar" class="col-sm-4 control-label">Modificar</label>
<input type="text" maxlength="4" name="Modificar" id="Modificar"  class="form-control" placeholder="Modificar">
@if($errors->has('Modificar'))
<div class="alert-danger">{{ $errors->first('Modificar') }}</div>
@endif
</div>
<div class="form-group">
<label for="Borrar" class="col-sm-4 control-label">Borrar</label>
<input type="text" maxlength="4" name="Borrar" id="Borrar"  class="form-control" placeholder="Borrar">
@if($errors->has('Borrar'))
<div class="alert-danger">{{ $errors->first('Borrar') }}</div>
@endif
</div>
<div class="form-group">
<label for="Docs" class="col-sm-4 control-label">Docs</label>
<input type="text" maxlength="11" name="Docs" id="Docs"  class="form-control" placeholder="Docs">
@if($errors->has('Docs'))
<div class="alert-danger">{{ $errors->first('Docs') }}</div>
@endif
</div>
<div class="form-group">
<label for="Lotes" class="col-sm-4 control-label">Lotes</label>
<input type="text" maxlength="11" name="Lotes" id="Lotes"  class="form-control" placeholder="Lotes">
@if($errors->has('Lotes'))
<div class="alert-danger">{{ $errors->first('Lotes') }}</div>
@endif
</div>
<div class="form-group">
<label for="EdoCta" class="col-sm-4 control-label">EdoCta</label>
<input type="text" maxlength="11" name="EdoCta" id="EdoCta"  class="form-control" placeholder="EdoCta">
@if($errors->has('EdoCta'))
<div class="alert-danger">{{ $errors->first('EdoCta') }}</div>
@endif
</div>
<div class="form-group">
<label for="Contract" class="col-sm-4 control-label">Contract</label>
<input type="text" maxlength="11" name="Contract" id="Contract"  class="form-control" placeholder="Contract">
@if($errors->has('Contract'))
<div class="alert-danger">{{ $errors->first('Contract') }}</div>
@endif
</div>
<div class="form-group">
<label for="MostrarDatos" class="col-sm-4 control-label">MostrarDatos</label>
<input type="text" maxlength="11" name="MostrarDatos" id="MostrarDatos"  class="form-control" placeholder="MostrarDatos">
@if($errors->has('MostrarDatos'))
<div class="alert-danger">{{ $errors->first('MostrarDatos') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('permisosRoles.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection