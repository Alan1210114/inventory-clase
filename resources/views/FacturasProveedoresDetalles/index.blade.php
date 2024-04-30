 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/FacturasProveedoresDetalles/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>facturas_proveedores_id</th>
            <th>material_id</th>
            <th>cantidad</th>
            <th>importe</th>
            <th>precio_venta</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($FacturasProveedoresDetallesList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/facturas_proveedores_detalles/edit/{{ $row->id }}" title="Editar FacturasProveedoresDetalles" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar facturas_proveedores_detalles" onclick="deleteFacturasProveedoresDetalles({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->facturas_proveedores_id }}</td>
                <td>{{ $row->material_id }}</td>
                <td>{{ $row->cantidad }}</td>
                <td>{{ $row->importe }}</td>
                <td>{{ $row->precio_venta }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $FacturasProveedoresDetallesList->links() }}</div>
    <script>

    function deleteFacturasProveedoresDetalles(id){
            Swal.fire({
                title: 'Seguro de borrar facturas_proveedores_detalles?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/FacturasProveedoresDetalles/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'facturas_proveedores_detalles borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection