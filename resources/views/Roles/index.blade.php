 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/Roles/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>

            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>nombreRol</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($RolesList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/roles/edit/{{ $row->id }}" title="Editar Roles" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar roles" onclick="deleteRoles({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombreRol }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $RolesList->links() }}</div>
    <script>

    function deleteRoles(id){
            Swal.fire({
                title: 'Seguro de borrar roles?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/Roles/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("#row_"+id).remove()
                        Swal.fire(
                            'Borrado!',
                            'roles borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection