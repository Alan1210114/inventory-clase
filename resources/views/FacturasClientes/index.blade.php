 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/FacturasClientes/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>fecha</th>
            <th>cliente_id</th>
            <th>sub_total</th>
            <th>iva</th>
            <th>total</th>
            <th>status</th>
            <th>created_at</th>
            <th>updated_at</th>
            <th>deleted_at</th>
        </tr>
      </thead>
        <tbody>
    @foreach($FacturasClientesList as $row)
            <tr>
                <td>
                    <a href="/admin/facturas_clientes/edit/{{ $row->id }}" title="Editar FacturasClientes" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar facturas_clientes" onclick="deleteFacturasClientes({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fecha }}</td>
                <td>{{ $row->cliente_id }}</td>
                <td>{{ $row->sub_total }}</td>
                <td>{{ $row->iva }}</td>
                <td>{{ $row->total }}</td>
                <td>{{ $row->status }}</td>
                <td>{{ $row->created_at }}</td>
                <td>{{ $row->updated_at }}</td>
                <td>{{ $row->deleted_at }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $FacturasClientesList->links() }}</div>
    <script>

    function deleteFacturasClientes(id){
            Swal.fire({
                title: 'Seguro de borrar facturas_clientes?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/FacturasClientes/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'facturas_clientes borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection