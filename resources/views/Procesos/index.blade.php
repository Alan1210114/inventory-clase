 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/Procesos/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>fecha_hora_inicio</th>
            <th>tipo_proceso</th>
            <th>operador_id</th>
            <th>material_id</th>
            <th>cantidad</th>
            <th>producto_resultante</th>
            <th>tipo_pieza_id</th>
            <th>fecha_hora_terminacion</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($ProcesosList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/procesos/edit/{{ $row->id }}" title="Editar Procesos" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar procesos" onclick="deleteProcesos({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fecha_hora_inicio }}</td>
                <td>{{ $row->tipo_proceso }}</td>
                <td>{{ $row->operador_id }}</td>
                <td>{{ $row->material_id }}</td>
                <td>{{ $row->cantidad }}</td>
                <td>{{ $row->producto_resultante }}</td>
                <td>{{ $row->tipo_pieza_id }}</td>
                <td>{{ $row->fecha_hora_terminacion }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $ProcesosList->links() }}</div>
    <script>

    function deleteProcesos(id){
            Swal.fire({
                title: 'Seguro de borrar procesos?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/Procesos/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'procesos borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection