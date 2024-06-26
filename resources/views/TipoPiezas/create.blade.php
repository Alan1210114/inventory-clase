
@extends('layouts.admin')
@section('contenido')
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h2 class="">Nuevo TipoPiezas</h2>
</div>
<div class="pull-right">
@if ($errors->any())
<div class="alert alert-danger">
<strong>Whoops!</strong> Hay error en los datos de entrada<br><br>
</div>
@endif
<form class= "form-horizontal" action="{{ route('tipoPiezas.create') }}" method="POST" method="POST" enctype="multipart/form-data">
@csrf
<div class="card-body">
<div class="form-group">
<label for="forma" class="col-sm-4 control-label">forma</label>
<input type="text" maxlength="200" name="forma" id="forma"  class="form-control" placeholder="forma">
@if($errors->has('forma'))
<div class="alert-danger">{{ $errors->first('forma') }}</div>
@endif
</div>
<a class="btn btn-secondary" href="{{ route('tipoPiezas.index') }}"> Regresar</a>
<button type="submit" class="btn btn-success">Grabar</button>
</div>
</form>
</div>
</div><script>



</script>
@endsection