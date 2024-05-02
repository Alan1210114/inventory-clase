 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/Bitacora/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>fecha_hora</th>
            <th>user_id</th>
            <th>accion</th>
            <th>datos</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($BitacoraList as $row)
            <tr>
                <td>
                    <a href="/admin/bitacora/edit/{{ $row->id }}" title="Editar Bitacora" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar bitacora" onclick="deleteBitacora({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fecha_hora }}</td>
                <td>{{ $row->user_id }}</td>
                <td>{{ $row->accion }}</td>
                <td>{{ $row->datos }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $BitacoraList->links() }}</div>
    <script>

    function deleteBitacora(id){
            Swal.fire({
                title: 'Seguro de borrar bitacora?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/bitacora/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_" + id).remove()
                        Swal.fire(
                            'Borrado!',
                            'bitacora borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection