 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/cotizacionesDetalles/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
       <tr>
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>cotizaciones_id</th>
            <th>producto_id</th>
            <th>cantidad</th>
            <th>importe</th>
            <th>precio_venta</th>
        </tr>
      </thead>
        <tbody>
    @foreach($CotizacionesDetallesList as $row)
            <tr>
                <td>
                    <a href="/admin/cotizaciones_detalles/edit/{{ $row->id }}" title="Editar CotizacionesDetalles" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar cotizaciones_detalles" onclick="deleteCotizacionesDetalles({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->REL_cotizaciones->nombre_clientes }}</td>
                <td>{{ $row->REL_productos->nombre_producto }}</td>
                <td>{{ $row->cantidad }}</td>
                <td>{{ $row->importe }}</td>
                <td>{{ $row->precio_venta }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $CotizacionesDetallesList->links() }}</div>
    <script>

    function deleteCotizacionesDetalles(id){
            Swal.fire({
                title: 'Seguro de borrar cotizaciones_detalles?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/cotizacionesDetalles/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_" + id).remove()
                        Swal.fire(
                            'Borrado!',
                            'cotizaciones_detalles borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection