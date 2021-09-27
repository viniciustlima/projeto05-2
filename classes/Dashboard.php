<?php
	class Dashboard {
    public static $roles = [
      "0" => "Normal",
      "1" => "Sub-Administrator",
      "2" => "Administrator"
    ];

		public static function IsLoggedIn () {
			return isset($_SESSION["admin"]) ? true : false;
		}

		public static function LogOut() {
			session_destroy();
      header("Location: ".INCLUDE_PATH_DASHBOARD);
		}

		public static function Redirect($url) {
      echo "<script>location.href=\"{$url}\"</script>";
      die();
    }

		public static function LoadPage() {
      if (isset($_GET["url"])) {
        $url = explode("/", $_GET["url"]);
        if (file_exists("pages/{$url[0]}.php")) {
          include("pages/{$url[0]}.php");
        } else {
          Dashboard::Redirect(INCLUDE_PATH_DASHBOARD);
          die();
        }
      } else {
        include("pages/home.php");
      }
    }

    public static function Alert($type, $message) {
      if ($type == "sucesso") {
        echo "<div class=\"alert__message message-success\"><i class=\"far fa-check\"></i> {$message}</div>";
      } else if ($type == "erro") {
        echo "<div class=\"alert__message message-error\"><i class=\"far fa-times\"></i> {$message}</div>";
      } else if ($type == "warn") {
        echo "<div class=\"alert__message message-warn\"><i class=\"far fa-times\"></i> {$message}</div>";
      }
    }

	}
?>