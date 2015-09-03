<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $recipe["name"] ?></title>
</head>
<body>
	<a href="/recipes/all">All Recipes</a> | <a href="">Log Out</a>
	<h2><?= $recipe["name"] ?></h2>
	<p><?= $recipe["content"] ?></p>
	<!-- recipe creator will see edit link -->
<?php if($recipe["user_id"] == $this->session->userdata("id")){ ?>
				<a href="/edit/<?= $recipe['id']?>">Edit</a>
<?php }
			// not recipe creator, will see save link 
			else{ ?>
				<a href="/save/<?= $recipe['id']?>">Save Recipe</a>
<?php	} ?>	
</body>
</html>