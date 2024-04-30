<table class="table table-bordered table-stripped">
    <thead>
        <tr>
            <th>ID</th>
            <th>NOMBRE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        </tr>
        @endforeach
    </tbody>
</table>