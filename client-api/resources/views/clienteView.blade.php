<h1>Editar</h1>
<form id="editarClienteForm" action="{{ route('cliente.update', $cliente['id']) }}"> @csrf
  <input type="hidden" name="id" id="id" value="{{ $cliente['id'] ?? '' }}">

  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ $cliente['name'] ?? '' }}">

  <label for="email">Email</label>
  <input type="email" name="email" id="email" value="{{ $cliente['email'] ?? '' }}">

  <label for="phone">Teléfono</label>
  <input type="text" name="phone" id="phone" value="{{ $cliente['phone'] ?? '' }}">

  <label for="address">Dirección</label>
  <input type="text" name="address" id="address" value="{{ $cliente['address'] ?? '' }}">

  <button type="submit" id="guardarCliente">Guardar Cambios</button>
</form>

<script>
  document.getElementById('guardarCliente').addEventListener('click', function(event) {
    // ... (rest of the JavaScript code remains the same)
  });
</script>
