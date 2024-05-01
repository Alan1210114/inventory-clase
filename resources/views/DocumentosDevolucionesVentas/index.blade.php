 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/DocumentosDevolucionesVentas/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>nombre</th>
            <th>devolucion_ventas_id</th>
            <th>fecha</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($DocumentosDevolucionesVentasList as $row)
            <tr>
                <td>
                    <a href="/admin/documentos_devoluciones_ventas/edit/{{ $row->id }}" title="Editar DocumentosDevolucionesVentas" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar documentos_devoluciones_ventas" onclick="deleteDocumentosDevolucionesVentas({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombre }}</td>
                <td>{{ $row->devolucion_ventas_id }}</td>
                <td>{{ $row->fecha }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $DocumentosDevolucionesVentasList->links() }}</div>
    <script>

    function deleteDocumentosDevolucionesVentas(id){
            Swal.fire({
                title: 'Seguro de borrar documentos_devoluciones_ventas?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/DocumentosDevolucionesVentas/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'documentos_devoluciones_ventas borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection