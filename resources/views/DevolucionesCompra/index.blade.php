 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/DevolucionesCompra/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>fecha</th>
            <th>proveedor_id</th>
            <th>total</th>
            <th>factura_id</th>
        </tr>
      </thead>
        <tbody>
    @foreach($DevolucionesCompraList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/devoluciones_compra/edit/{{ $row->id }}" title="Editar DevolucionesCompra" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar devoluciones_compra" onclick="deleteDevolucionesCompra({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fecha }}</td>
                <td>{{ $row->REL_proveedores->nombre_proveedor }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->REL_facturas_proveedores->num_factura }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $DevolucionesCompraList->links() }}</div>
    <script>

    function deleteDevolucionesCompra(id){
            Swal.fire({
                title: 'Seguro de borrar devoluciones_compra?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/DevolucionesCompra/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'devoluciones_compra borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection