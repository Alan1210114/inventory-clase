
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Editar permisos</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('permisos.update',$Permisos->id) }}" method="POST" enctype="multipart/form-data">
@csrf
@method('PATCH')
<div class="card-body">
<div class="form-group">
<label for="nombrePermiso" class="col-sm-4 control-label">nombrePermiso</label>
<input type="text" maxlength="1600" name="nombrePermiso" id="nombrePermiso" value="{{ $Permisos->nombrePermiso }}" class="form-control" placeholder="nombrePermiso">
@if($errors->has('nombrePermiso'))
<div class="alert-danger">{{ $errors->first('nombrePermiso') }}</div>
@endif
</div>
<div class="form-group">
<label for="slug" class="col-sm-4 control-label">slug</label>
<input type="text" maxlength="960" name="slug" id="slug" value="{{ $Permisos->slug }}" class="form-control" placeholder="slug">
@if($errors->has('slug'))
<div class="alert-danger">{{ $errors->first('slug') }}</div>
@endif
</div>
<div class="form-group">
<label for="id_parent" class="col-sm-4 control-label">id_parent</label>
<input type="text" maxlength="11" name="id_parent" id="id_parent" value="{{ $Permisos->id_parent }}" class="form-control" placeholder="id_parent">
@if($errors->has('id_parent'))
<div class="alert-danger">{{ $errors->first('id_parent') }}</div>
@endif
</div>
<div class="form-group">
<label for="isgroup" class="col-sm-4 control-label">isgroup</label>
<input type="text" maxlength="4" name="isgroup" id="isgroup" value="{{ $Permisos->isgroup }}" class="form-control" placeholder="isgroup">
@if($errors->has('isgroup'))
<div class="alert-danger">{{ $errors->first('isgroup') }}</div>
@endif
</div>
<div class="form-group">
<label for="orden" class="col-sm-4 control-label">orden</label>
<input type="text" maxlength="4" name="orden" id="orden" value="{{ $Permisos->orden }}" class="form-control" placeholder="orden">
@if($errors->has('orden'))
<div class="alert-danger">{{ $errors->first('orden') }}</div>
@endif
</div>
<div class="form-group">
<label for="route" class="col-sm-4 control-label">route</label>
<input type="text" maxlength="800" name="route" id="route" value="{{ $Permisos->route }}" class="form-control" placeholder="route">
@if($errors->has('route'))
<div class="alert-danger">{{ $errors->first('route') }}</div>
@endif
</div>
<div class="form-group">
<label for="icon" class="col-sm-4 control-label">icon</label>
<input type="text" maxlength="640" name="icon" id="icon" value="{{ $Permisos->icon }}" class="form-control" placeholder="icon">
@if($errors->has('icon'))
<div class="alert-danger">{{ $errors->first('icon') }}</div>
@endif
</div>
<div class="form-group">
<label for="image" class="col-sm-4 control-label">image</label>
<input type="text" maxlength="800" name="image" id="image" value="{{ $Permisos->image }}" class="form-control" placeholder="image">
@if($errors->has('image'))
<div class="alert-danger">{{ $errors->first('image') }}</div>
@endif
</div>
<div class="form-group">
<label for="color" class="col-sm-4 control-label">color</label>
<input type="text" maxlength="320" name="color" id="color" value="{{ $Permisos->color }}" class="form-control" placeholder="color">
@if($errors->has('color'))
<div class="alert-danger">{{ $errors->first('color') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('permisos.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection