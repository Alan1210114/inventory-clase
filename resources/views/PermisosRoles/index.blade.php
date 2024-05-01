 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/PermisosRoles/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>idRol</th>
            <th>isgroup</th>
            <th>orden</th>
            <th>idPermiso</th>
            <th>Listar</th>
            <th>Ver</th>
            <th>Agregar</th>
            <th>Modificar</th>
            <th>Borrar</th>
            <th>Docs</th>
            <th>Lotes</th>
            <th>EdoCta</th>
            <th>Contract</th>
            <th>MostrarDatos</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($PermisosRolesList as $row)
            <tr>
                <td>
                    <a href="/admin/permisos_roles/edit/{{ $row->id }}" title="Editar PermisosRoles" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar permisos_roles" onclick="deletePermisosRoles({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->idRol }}</td>
                <td>{{ $row->isgroup }}</td>
                <td>{{ $row->orden }}</td>
                <td>{{ $row->idPermiso }}</td>
                <td>{{ $row->Listar }}</td>
                <td>{{ $row->Ver }}</td>
                <td>{{ $row->Agregar }}</td>
                <td>{{ $row->Modificar }}</td>
                <td>{{ $row->Borrar }}</td>
                <td>{{ $row->Docs }}</td>
                <td>{{ $row->Lotes }}</td>
                <td>{{ $row->EdoCta }}</td>
                <td>{{ $row->Contract }}</td>
                <td>{{ $row->MostrarDatos }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $PermisosRolesList->links() }}</div>
    <script>

    function deletePermisosRoles(id){
            Swal.fire({
                title: 'Seguro de borrar permisos_roles?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/PermisosRoles/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_" + id).remove()
                        Swal.fire(
                            'Borrado!',
                            'permisos_roles borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection