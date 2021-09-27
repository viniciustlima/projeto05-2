<!DOCTYPE html>
<html lang="en">
<head>
	<title>Projeto 05 - Admin Dashboard</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="stylesheet" href="<?= INCLUDE_PATH_DASHBOARD ?>styles/login.css">
</head>
<body>
	<form class="form" method="post">
		<h2 class="form__title">Login</h2>
		<?php 
				if (isset($_POST["admin"])) {
					$username = $_POST["username"];
					$password = $_POST["password"];
					if ($admin_username == "" && $password == "") {
						echo "<div class=\"form__message form__message--error\">You can't login in an account without an username and password.</div>";
					} else if ($username == "") {
						echo "<div class=\"form__message form__message--error\">You can't login without an username.</div>";
					} else if ($password == "") {
						echo "<div class=\"form__message form__message--error\">You can't login without a password.</div>";
					} else {
						$sql = MySql::conn()->prepare("SELECT * FROM admin WHERE username = ? AND password = ?");
						$sql->execute([$username, $password]);
						if ($sql->rowCount() === 1) {
							$userinfo = $sql->fetch();
							$_SESSION["admin"] = true;
							$_SESSION["admin_name"] = $userinfo["name"];
							$_SESSION["admin_username"] = $userinfo["username"];
							$_SESSION["admin_password"] = $userinfo["password"];
							$_SESSION["admin_role"] = $userinfo["role"];
							header("Location: ".INCLUDE_PATH_DASHBOARD);
							die();
						} else {
							echo "<div class=\"form__message form__message--error\">Incorrect e-mail/password combination</div>";
						}
					}
				}
			?>
		<div class="form__input-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form__input" id="username">
			</div>
			<div class="form__input-group">
				<label for="password">Password</label>
				<input type="password" name="password" maxlength="16" class="form__input" id="password">
			</div>
			<button class="form__button" name="admin">Continue</button>
			<p class="form__text">
				<span>Don't know how went here? <a href="<?= INCLUDE_PATH ?>" class="form__link">Go back</a></span>
			</p>
	</form>
</body>
</html>