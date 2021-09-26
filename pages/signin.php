<?php 
	if (isset($_SESSION["login"])) {
		header("Location: ".INCLUDE_PATH."account");
		die();
	}
 ?>
<section class="new-acc">
	<div class="center">
		<form method="post" class="form" id="login">
			<h2 class="form__title">Login</h2>
			<?php 
				if (isset($_POST["login"])) {
					$email = $_POST["email"];
					$password = $_POST["password"];
					if ($email == "" && $password == "") {
						echo "<div class=\"form__message form__message--error\">You can't login in an account without e-mail and password.</div>";
					} else if ($email == "") {
						echo "<div class=\"form__message form__message--error\">You can't login without an e-mail.</div>";
					} else if ($password == "") {
						echo "<div class=\"form__message form__message--error\">You can't login without a password.</div>";
					} else {
						$sql = MySql::conn()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
						$sql->execute([$email, $password]);
						if ($sql->rowCount() === 1) {
							$userinfo = $sql->fetch();
							$_SESSION["login"] = true;
							$_SESSION["name"] = $userinfo["name"];
							$_SESSION["email"] = $userinfo["email"];
							$_SESSION["password"] = $userinfo["password"];
							header("Location: ".INCLUDE_PATH."account");
							die();
						} else {
							echo "<div class=\"form__message form__message--error\">Incorrect e-mail/password combination</div>";
						}
					}
				}
			?>
			<div class="form__input-group">
				<label for="email">E-mail</label>
				<input type="email" name="email" class="form__input" id="email">
				<div class="form__input-error-message">Incorret e-mail.</div>
			</div>
			<div class="form__input-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form__input" id="password">
				<div class="form__input-error-message">Incorrect password.</div>
			</div>
			<button class="form__button" name="login">Continue</button>
			<p class="form__text">
				<a href="<?= INCLUDE_PATH ?>rescue-password" class="form__link">Forgot your password?</a>
			</p>
			<div class="form__text">
				<span>Don't have an account? <a id="linkCreateAccount" href="<?= INCLUDE_PATH ?>signup" class="form__link">Create account</a></span>
			</div>
		</form>
	</div>
</section>