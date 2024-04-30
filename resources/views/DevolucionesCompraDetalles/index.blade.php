 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/DevolucionesCompraDetalles/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>devoluciones_compra_id</th>
            <th>material_id</th>
            <th>cantidad</th>
            <th>precio_costo</th>
        </tr>
      </thead>
        <tbody>
    @foreach($DevolucionesCompraDetallesList as $row)
            <tr id="row_{{$row->id}}">
                <td>
                    <a href="/admin/devoluciones_compra_detalles/edit/{{ $row->id }}" title="Editar DevolucionesCompraDetalles" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar devoluciones_compra_detalles" onclick="deleteDevolucionesCompraDetalles({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->devoluciones_compra_id }}</td>
                <td>{{ $row->REL_materiales->nombre_material }}</td>
                <td>{{ $row->cantidad }}</td>
                <td>{{ $row->precio_costo }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $DevolucionesCompraDetallesList->links() }}</div>
    <script>

    function deleteDevolucionesCompraDetalles(id){
            Swal.fire({
                title: 'Seguro de borrar devoluciones_compra_detalles?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/DevolucionesCompraDetalles/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'devoluciones_compra_detalles borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection