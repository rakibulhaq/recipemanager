<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Add a Recipe</title>
</head>
<body>
	<h2>Add a Recipe</h2>
	<form action="/create" method="post">
		<input type="text" name="name" placeholder="Recipe Name">
		<textarea name="content" placeholder="Recipe Details"></textarea>
		<input type="submit" value="add a recipe">
	</form>
</body>
</html>