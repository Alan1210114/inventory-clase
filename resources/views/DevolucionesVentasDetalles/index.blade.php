 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/DevolucionesVentasDetalles/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>devoluciones_venta_id</th>
            <th>producto_id</th>
            <th>cantidad</th>
            <th>precio_venta</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($DevolucionesVentasDetallesList as $row)
            <tr>
                <td>
                    <a href="/admin/devoluciones_ventas_detalles/edit/{{ $row->id }}" title="Editar DevolucionesVentasDetalles" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar devoluciones_ventas_detalles" onclick="deleteDevolucionesVentasDetalles({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->devoluciones_venta_id }}</td>
                <td>{{ $row->producto_id }}</td>
                <td>{{ $row->cantidad }}</td>
                <td>{{ $row->precio_venta }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $DevolucionesVentasDetallesList->links() }}</div>
    <script>

    function deleteDevolucionesVentasDetalles(id){
            Swal.fire({
                title: 'Seguro de borrar devoluciones_ventas_detalles?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/DevolucionesVentasDetalles/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'devoluciones_ventas_detalles borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection