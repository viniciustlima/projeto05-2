<div class="main__box w100">
	<h2>Profile / <span>Edit</span></h2>
</div>
<div class="main__box w100">
	<form method="post" enctype="multipart/form-data" class="form">
		<?php 
			if (isset($_POST["edit_user"])) {
				$name = $_POST["name"];
				$username = $_POST["username"];
				$password = $_POST["password"];
				$user = new User();
				if ($user->UpdateUser($name, $username, $password)) {
					$_SESSION["admin_name"] = $name;
					$_SESSION["admin_username"] = $username;
					$_SESSION["admin_password"] = $password;

					Dashboard::Alert("success", "User updated successfully!");
				} else {
					Dashboard::Alert("error", "An error occurred while trying to update the current user...");
				}
			}
		?>
		<div class="form__input-group">
			<label for="name">Profile Name:</label>
			<input type="text" name="name" id="name" class="form__input" value="<?= $_SESSION["admin_name"] ?>">
		</div>
		<div class="form__input-group">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" class="form__input" value="<?= $_SESSION["admin_username"] ?>">
		</div>
		<div class="form__input-group">
			<label for="password">Your Password:</label>
			<input type="password" name="password" id="password" maxlength="16" class="form__input" value="<?= $_SESSION["admin_password"] ?>">
		</div>
		<button class="form__button" name="edit_user">Save Changes</button>
	</form>
</div>
