<?php 
	include "../config.php";
	if (Dashboard::IsLoggedIn()) {
		include "main.php";
	} else {
		include "login.php";
	}
?>