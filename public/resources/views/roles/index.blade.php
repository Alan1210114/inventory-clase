<table class="table table-bordered table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($roles as $role)
        <tr>
        <td>{{ $role->id }}</td>
        <td>{{ $role->nombreRol }}</td>
        </tr>
        @endforeach
    </tbody>
</table>