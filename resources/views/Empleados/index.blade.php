 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/Empleados/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr>
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>nombre</th>
            <th>apellido_paterno</th>
            <th>apellido_materno</th>
            <th>departamento_id</th>
            <th>fecha_nacimiento</th>
            <th>curp</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($EmpleadosList as $row)
            <tr>
                <td>
                    <a href="/admin/empleados/edit/{{ $row->id }}" title="Editar Empleados" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar empleados" onclick="deleteEmpleados({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombre }}</td>
                <td>{{ $row->apellido_paterno }}</td>
                <td>{{ $row->apellido_materno }}</td>
                <td>{{ $row->departamento_id }}</td>
                <td>{{ $row->fecha_nacimiento }}</td>
                <td>{{ $row->curp }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $EmpleadosList->links() }}</div>
    <script>

    function deleteEmpleados(id){
            Swal.fire({
                title: 'Seguro de borrar empleados?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/Empleados/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_" + id).remove()
                        Swal.fire(
                            'Borrado!',
                            'empleados borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection