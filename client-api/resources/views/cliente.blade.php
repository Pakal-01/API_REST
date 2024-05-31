<h1>Nuevo Clinet</h1>
<form action="{{route ('cliente.store')}}" method="post">
    @csrf


    <label for="name">Nombre</label>
    <input type="text" name="name" id="name">

    <label for="email">Email</label>
    <input type="email" name="email" id="email">

    <label for="phone">Telefono</label>
    <input type="text" name="phone" id="phone">

    <label for="address">Direccion</label>
    <input type="text" name="address" id="address">

    <button type ="submit">Guardar</button>
</form>
