<?php 
	verifyPermissionPage(1);
	
	if (isset($_GET["url"])) {
    $dashboard_url = explode("/", $_GET["url"]);
  }

	if (isset($dashboard_url[1])) {
		if ($dashboard_url[1] == "") {
			include "admin-sub/admin-main.php";
		} else if ($dashboard_url[1] == "register") {
			if (isset($_GET["user"])) { 
				include "admin-sub/new-user.php";
			} else if (isset($_GET["product"])) {
				include "admin-sub/new-product.php";
			} else if (isset($_GET["collection"])) {
				include "admin-sub/new-collection.php";
			} else if (isset($_GET["coupon"])) {
				include "admin-sub/new-coupon.php";		
	 		} else {
	 			include "admin-sub/url-error.php";
			}
		}
	} else {
		include "admin-sub/admin-main.php";
	}
?>