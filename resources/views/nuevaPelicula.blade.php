<!DOCTYPE html>
<html>
<head>
	<title>Peliculas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<form action="{{ route('crearPeli') }}" method="POST" id="anadirPeliculaForm">
  @csrf
  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Inserta el nombre" required>
  </div>
  <div class="form-group">
    <label for="duracion">Duración</label>
    <input type="number" min="0" name="duracion" required>
  </div>
  <div class="form-group">
    <label for="Director">Id Director</label>
    <select name="director">
    @foreach($directores as $director)
    <option value="{{ $director->id }}">{{ $director->nombre }}</option>
    @endforeach
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Añadir película</button>
  <a href="/" type="button" class="btn btn-success">Volver atrás</a>
</form>
</body>
</html>