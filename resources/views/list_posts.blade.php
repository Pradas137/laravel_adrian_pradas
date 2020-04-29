<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Posts</h1>
		@foreach( $posts as $post)
			 
			<li><h3>{{$post->user->name}}</h3></li>
			<li>{{$post->text}}</li><br>
			<li>{{$post->created_at}}</li>
		@endforeach 
</body>
</html>