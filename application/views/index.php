<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recipe Manager</title>
</head>
<body>
	<?= $this->session->flashdata('errors') ?>
	<h2>Login</h2>
	<form action="/login" method="post">
		<input type="text" name="email" placeholder="email here...">
		<input type="password" name="password" placeholder="password here...">
		<input type="submit" value="login">
	</form>
	<h2>Register</h2>
	<form action="/register" method="post">
		<input type="text" name="first_name" placeholder="first name">
		<input type="text" name="last_name" placeholder="last name">
		<input type="text" name="email" placeholder="email">
		<input type="text" name="password" placeholder="password">
		<input type="text" name="password_conf" placeholder="confirm password">
		<input type="submit" value="register">
	</form>
</body>
</html>