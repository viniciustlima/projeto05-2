<?php 
	if (!(isset($_SESSION["login"]))) {
		header("Location: ".INCLUDE_PATH."signin");
		die();
	}
	if (isset($_GET["signout"])) {
		session_destroy();
		header("Location: ".INCLUDE_PATH."signin");
		die();
	}
?>
<section class="account">
	<div class="center">
		<p><?= $_SESSION["name"] ?></p>
		<a href="<?= INCLUDE_PATH ?>account?signout">Sign out</a>
	</div>
</section>