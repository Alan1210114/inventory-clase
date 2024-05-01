 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/DocumentosDevolucionesCompras/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>nombre</th>
            <th>devolucion_compra_id</th>
            <th>fecha</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($DocumentosDevolucionesComprasList as $row)
            <tr>
                <td>
                    <a href="/admin/documentos_devoluciones_compras/edit/{{ $row->id }}" title="Editar DocumentosDevolucionesCompras" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar documentos_devoluciones_compras" onclick="deleteDocumentosDevolucionesCompras({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->nombre }}</td>
                <td>{{ $row->devolucion_compra_id }}</td>
                <td>{{ $row->fecha }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $DocumentosDevolucionesComprasList->links() }}</div>
    <script>

    function deleteDocumentosDevolucionesCompras(id){
            Swal.fire({
                title: 'Seguro de borrar documentos_devoluciones_compras?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/DocumentosDevolucionesCompras/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'documentos_devoluciones_compras borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection