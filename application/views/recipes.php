<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipe Manager</title>
</head>
<body>
	<h2>Recipes</h2>
	<a href="/add">Add a recipe</a> | <a href="/logout">Log Out</a>
	<table>
		<thead>
			<th>Name</th>
			<th>Submitted By</th>
		</thead>
		<tbody>
<?php foreach($recipes AS $recipe){ ?>
				<tr>
					<td><a href="/recipes/<?= $recipe['id']?>"><?= $recipe["name"] ?></td>
					<td><a href="/users/<?= $recipe['user_id']?>"><?= $recipe["first_name"] ?></a></td>
				</tr>
<?php } ?>
		</tbody>
	</table>
</body>
</html>