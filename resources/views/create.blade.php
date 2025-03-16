<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


	<form method="POST" action="/posts">
		@csrf

		<input type="text" name="title" placeholder="Title">

		<textarea name="body"></textarea>
		<input type="submit" name="" value="Create Post">
	</form>

</body>
</html>