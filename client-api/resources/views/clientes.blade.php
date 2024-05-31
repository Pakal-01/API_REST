<h1>clientes</h1>
<td>
    <a href="{{route('cliente.store') }}"><h4>crear nuevo cliente</h4></a>
</td>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $cliente)
            <tr>
                <td>{{ $cliente['id']}}</td>
                <td>{{ $cliente['name']}}</td>
                <td>{{ $cliente['email']}}</td>
                <td>{{ $cliente['phone']}}</td>
                <td>{{ $cliente['address']}}</td>
                <td>
                    <a href="{{route('cliente.view', $cliente['id']) }}">Ver</a>
                    <a href="{{route('cliente.delete', $cliente['id']) }}">Borrar</a>
                </td>

            </tr>
        @endforeach
    </tbody>
</table>
