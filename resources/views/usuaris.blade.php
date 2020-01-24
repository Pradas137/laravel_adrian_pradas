<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Usuaris</h1>
	@foreach($users as $user)
		<li>{{$user->name}}</li>
	@endforeach
</body>
</html>