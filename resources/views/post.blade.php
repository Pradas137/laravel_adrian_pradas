<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Post {{$post->id}}</h1>

	<a>{{$post->text}}  Creado por :{{$post->user->name}}</a>
	
</body>
</html>