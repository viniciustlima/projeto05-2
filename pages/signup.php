<?php 
	if (isset($_SESSION["login"])) {
		header("Location: ".INCLUDE_PATH."account");
		die();
	}
?>
<section class="new-acc">
	<div class="center">
		<form method="post" class="form" id="login">
			<h2 class="form__title">Create Account</h2>
			<?php 
				if (isset($_POST["login"])) {
					$name = $_POST["name"];
					$email = $_POST["email"];
					$password = $_POST["password"];
					if ($name == "" && $email == "" && $password == "") {
						echo "<div class=\"form__message form__message--error\">You can't create an account without a name, an e-mail and a password.</div>";
					} else if ($name == "") {
						echo "<div class=\"form__message form__message--error\">You can't create an account without a name.</div>";
					} else if ($email == "") {
						echo "<div class=\"form__message form__message--error\">You can't create an account without an e-mail.</div>";
					} else if ($password == "") {
						echo "<div class=\"form__message form__message--error\">You can't create an account without a password.</div>";
					} else {
						$sql = MySql::conn()->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
						$sql->execute([$email, $password]);
						if ($sql->rowCount() === 1) {
							echo "<div class=\"form__message form__message--error\">This user exists.</div>";
						} else {
							$sql = MySql::conn()->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
							$sql->execute([$name, $email, $password]);
							header("Location: ".INCLUDE_PATH."signin");
							die();
						}
					}
				}
			?>
			<div class="form__input-group">
				<label for="name">Complete Name</label>
				<input type="name" name="name" class="form__input" id="name" required>
			</div>
			<div class="form__input-group">
				<label for="email">E-mail</label>
				<input type="email" name="email" class="form__input" id="email" required>
			</div>
			<div class="form__input-group">
				<label for="password">Password*</label>
				<input type="password" name="password" class="form__input" id="password" maxlength="16" required>
			</div>
			<button class="form__button" name="login">Create Account</button>
			<p class="form__text">
				<span>Already have an account? <a href="<?= INCLUDE_PATH ?>signin" class="form__link">Sign in</a></span>
			</p>
			<p class="form__text">
				<span style="font-size: 13px">*Up to 16 characteres</span>
			</p>
		</form>
	</div>
</section>