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
  	@foreach($peliculasTarantino as $peliculaTarantino)
    <tr>
      <td>{{ $peliculaTarantino->nombre }}</td>
      <td>{{ $peliculaTarantino->director->nombre }}</td>
      <td>{{ $peliculaTarantino->duracion }}</td>
    </tr>
    @endforeach
  </tbody>
</table>

<a href="/" class="btn btn-primary">Volver atrás</a>
</body>
</html>