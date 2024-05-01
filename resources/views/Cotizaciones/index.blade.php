 @extends('layouts.admin')
 @section('contenido')
<div class="row"><button class="btn btn-success" onclick="window.location.assign('/admin/Cotizaciones/create')">Agregar</button></div>
 <table class="table table-bordered table-striped table-sm">
        <thead>
        <tr id="row_{{ $row->id }}">
            <th><i class="fas fa-toolbox"></i></th>
            <th>id</th>
            <th>fecha</th>
            <th>Cliente</th>
            <th>cliente_nombre</th>
            <th>sub_total</th>
            <th>iva</th>
            <th>total</th>
            <th>status</th>
        </tr>
      </thead>
        <tbody>
    @foreach($CotizacionesList as $row)
            <tr>
                <td>
                    <a href="/admin/cotizaciones/edit/{{ $row->id }}" title="Editar Cotizaciones" class="btn btn-xs btn-outline-primary"><i class="fas fa-edit"></i></a>
                    <a href="#" class="btn btn-xs btn-outline-danger" title="Borrar cotizaciones" onclick="deleteCotizaciones({{ $row->id }})"><i class="fas fa-trash-alt"></i></a>
                </td>
                <td>{{ $row->id }}</td>
                <td>{{ $row->fecha }}</td>
                <td>{{ $row->REL_clientes->nombre_cliente }}</td>
                <td>{{ $row->cliente_nombre }}</td>
                <td>{{ $row->sub_total }}</td>
                <td>{{ $row->iva }}</td>
                <td>{{ $row->total }}</td>
@php
 $Valores=json_decode('[{"Label":"Enviada","Value":1},{"Label":"Procesada","Value":2}]');
 $Icons=json_decode('""');
 foreach($Valores as $i=>$v){
  if ($v->Value==$row->status){
    $Etiqueta=$v->Label;
    $Icon=$Icons[$i];
    }
  }
 @endphp
                <td>{{ $Etiqueta }}</td>
           </tr>
    @endforeach
        </tbody>
    </table>
    <div class="row">{{ $CotizacionesList->links() }}</div>
    <script>

    function deleteCotizaciones(id){
            Swal.fire({
                title: 'Seguro de borrar cotizaciones?',
                text: 'No podrá revertir eso!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, borrarlo!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.value) {
                    $.post('/admin/Cotizaciones/delete/'+id,{"_token":"{{@csrf_token()}}","_method":"delete"},function(response){
                      if (response.Error===0) { $("row_{{id}}").remove()
                        Swal.fire(
                            'Borrado!',
                            'cotizaciones borrado.',
                            'success'
                        )} else{ Swal.fire('Ocurrio un error al borrar')
                    })
                }
            })
        }
    </script>
    @endsection