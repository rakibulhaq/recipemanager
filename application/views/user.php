<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $user["first_name"] ?></title>
</head>
<body>
	<h2><?= $user["first_name"] ?></h2>
	<h3>Created:</h3>
	<ul>
<?php foreach($recipes as $recipe){ ?>
				<li>
					<a href="/recipes/<?= $recipe['id']?>"><?= $recipe["name"]?></a>
				</li>
<?php } ?>	
	</ul>
	<h3>Saved:</h3>
	<ul>
<?php foreach($saved as $save){ ?>
				<li>
					<a href="/recipes/<?= $save['recipe_id']?>"><?= $save["name"]?></a>
				</li>
<?php } ?>	
	</ul>

	<a href="/recipes/all">Back to Recipes</a> | <a href="/logout">Log Out</a>
</body>
</html>