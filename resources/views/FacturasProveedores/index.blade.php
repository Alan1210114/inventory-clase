 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/FacturasProveedores/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>fecha</th>
            <th>proveedor_id</th>
            <th>sub_total</th>
            <th>iva</th>
            <th>total</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($FacturasProveedoresList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/facturas_proveedores/edit/{{ $row->id }}" title="Editar FacturasProveedores" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar facturas_proveedores" onclick="deleteFacturasProveedores({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fecha }}</td>
                <td>{{ $row->proveedor_id }}</td>
                <td>{{ $row->sub_total }}</td>
                <td>{{ $row->iva }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $FacturasProveedoresList->links() }}</div>
    <script>

    function deleteFacturasProveedores(id){
            Swal.fire({
                title: 'Seguro de borrar facturas_proveedores?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/FacturasProveedores/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'facturas_proveedores borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection