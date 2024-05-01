 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/ProductosProceso/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>producto_id</th>
            <th>lote</th>
            <th>tipo_pieza</th>
            <th>precio_costo</th>
            <th>precio_venta</th>
            <th>cantidad</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($ProductosProcesoList as $row)
            <tr>
                <td>
                    <a href="/admin/productos_proceso/edit/{{ $row->id }}" title="Editar ProductosProceso" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar productos_proceso" onclick="deleteProductosProceso({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->producto_id }}</td>
                <td>{{ $row->lote }}</td>
                <td>{{ $row->tipo_pieza }}</td>
                <td>{{ $row->precio_costo }}</td>
                <td>{{ $row->precio_venta }}</td>
                <td>{{ $row->cantidad }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $ProductosProcesoList->links() }}</div>
    <script>

    function deleteProductosProceso(id){
            Swal.fire({
                title: 'Seguro de borrar productos_proceso?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/ProductosProceso/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_" + id).remove()
                        Swal.fire(
                            'Borrado!',
                            'productos_proceso borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection