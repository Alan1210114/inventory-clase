<table class="table table-bordered table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($permisos as $permiso)
        <tr>
        <td>{{ $permiso->id }}</td>
        <td>{{ $permiso->nombrePermiso }}</td>
        </tr>
        @endforeach
    </tbody>
</table>