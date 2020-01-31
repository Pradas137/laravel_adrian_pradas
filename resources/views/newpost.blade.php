<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Posts</h1>
	@foreach($post as $posts)
		<li>{{$posts->name}}</li>
	@endforeach
</body>
</html>