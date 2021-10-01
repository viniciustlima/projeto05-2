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
      if ($type == "success") {
        echo "<div class=\"alert__message message-success\"><i class=\"far fa-check\"></i> {$message}</div>";
      } else if ($type == "error") {
        echo "<div class=\"alert__message message-error\"><i class=\"far fa-times\"></i> {$message}</div>";
      } else if ($type == "warn") {
        echo "<div class=\"alert__message message-warn\"><i class=\"far fa-times\"></i> {$message}</div>";
      }
    }

    public static function validateImage($image) {
      if ($image["type"] == "image/jpeg") {
        $imageSize = intval($image["size"]/1024);
        if ($imageSize < 300) return true;
        return false;
      }
      
      return false;
    } 

    public static function uploadFile($file) {
      $fileType = explode(".", $file["name"]);
      $imageName = uniqid().".".$fileType[count($fileType) - 1];
      if (move_uploaded_file($file["tmp_name"], BASE_DIR_DASHBOARD."/uploads/{$imageName}")) return $imageName;
      return false;
    }

    public static function deleteFile($file) {
      @unlink("uploads/".$file);
    }

	}
?>