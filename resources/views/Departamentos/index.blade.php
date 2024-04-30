 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/Departamentos/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>nombre_departamento</th>
            <th>empresa_id</th>
        </tr>
      </thead>
        <tbody>
    @foreach($DepartamentosList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/departamentos/edit/{{ $row->id }}" title="Editar Departamentos" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar departamentos" onclick="deleteDepartamentos({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombre_departamento }}</td>
                <td>{{ $row->REL_empresas->nombre_empresas }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $DepartamentosList->links() }}</div>
    <script>

    function deleteDepartamentos(id){
            Swal.fire({
                title: 'Seguro de borrar departamentos?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/Departamentos/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'departamentos borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection