<div class="main__box w100">
	<h2>Profile / <span>View</span></h2>
</div>
<div class="main__box w100">	
	<form method="post" class="form">
		<div class="form__input-group">
			<label for="name">Profile Name:</label>
			<input type="text" name="name" id="name" class="form__input" value="<?= $_SESSION["admin_name"] ?>"readonly>
		</div>
		<div class="form__input-group">
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" class="form__input" value="<?= $_SESSION["admin_username"] ?>"readonly>
		</div>
		<div class="form__input-group">
			<label for="password">Your Password:</label>
			<input type="password" name="password" id="password" maxlength="16" class="form__input" value="<?= $_SESSION["admin_password"] ?>" readonly>
		</div>
		
		<!-- <button class="form__button"><a href="<?= INCLUDE_PATH_DASHBOARD ?>profile?edit">Edit Profile</a></button> -->
		<button class="form__button"><a href="<?= INCLUDE_PATH_DASHBOARD ?>?profile?edit">Edit Profile</a></button>
	</form>
</div>
