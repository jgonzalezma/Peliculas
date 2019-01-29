<!DOCTYPE html>
<html>
<head>
	<title>Peliculas</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Director</th>
      <th scope="col">Duración (mins)</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($peliculas as $pelicula)
    <tr>
      <td>{{ $pelicula->nombre }}</td>
      <td>{{ $pelicula->director->nombre }}</td>
      <td>{{ $pelicula->duracion }}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<a href="/nuevaPelicula" class="btn btn-primary">Añadir pelicula</a>
<a href="/nuevoDirector" class="btn btn-warning">Añadir director</a>
</body>
</html>