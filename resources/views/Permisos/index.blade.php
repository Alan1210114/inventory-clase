 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/permisos/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>nombrePermiso</th>
            <th>slug</th>
            <th>id_parent</th>
            <th>isgroup</th>
            <th>orden</th>
            <th>route</th>
            <th>icon</th>
            <th>image</th>
            <th>color</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($PermisosList as $row)
            <tr>
                <td>
                    <a href="/admin/permisos/edit/{{ $row->id }}" title="Editar Permisos" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar permisos" onclick="deletePermisos({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombrePermiso }}</td>
                <td>{{ $row->slug }}</td>
                <td>{{ $row->id_parent }}</td>
                <td>{{ $row->isgroup }}</td>
                <td>{{ $row->orden }}</td>
                <td>{{ $row->route }}</td>
                <td>{{ $row->icon }}</td>
                <td>{{ $row->image }}</td>
                <td>{{ $row->color }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $PermisosList->links() }}</div>
    <script>

    function deletePermisos(id){
            Swal.fire({
                title: 'Seguro de borrar permisos?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/permisos/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_" + id).remove()
                        Swal.fire(
                            'Borrado!',
                            'permisos borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection