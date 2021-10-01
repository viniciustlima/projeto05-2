<?php 
	if (isset($_GET["edit"])) {
		include "profile-sub/edit.php";
	} else {
		include "profile-sub/view.php";
	} 
?>