<!DOCTYPE html>
<html>
<head>
	<title>directores</title>
</head>
<body>
@foreach($directores as $director)
{{$director->nombre}}
@endforeach
</body>
</html>