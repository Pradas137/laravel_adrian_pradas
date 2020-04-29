<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Usuaris</h1>
		@foreach( $users as $user)
			<li>{{$user->name}}</li>
			nposts={{$user->posts()->count()}}
			ncomments={{$user->comments()->count()}}
			<li>
				<ol>
					@foreach( $user->posts as $post)
					<li>{{$post->text}}</li>
					@endforeach
				</ol>
			</li>
		@endforeach 
</body>
</html>