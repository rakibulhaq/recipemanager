<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit a Recipe</title>
</head>
<body>
	<h2>Edit: <?= $recipe['name']?></h2>
	<form action="/update" method="post">
		<input type="hidden" name="id" value="<?= $recipe['id']?>">
		<input type="text" name="name" value="<?= $recipe['name']?>">
		<textarea name="content"><?= $recipe['content']?></textarea>
		<input type="submit" value="update recipe">
	</form>
	<a href="/recipes">Back to Recipes</a>
</body>
</html>