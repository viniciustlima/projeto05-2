<?php 	
	class User {
		public function UpdateUser($name, $username, $password) {
      $sql = MySql::conn()->prepare("UPDATE admin SET name = ?, username = ?, password = ? WHERE username = ?");
      if ($sql->execute([$name, $username, $password, $_SESSION["admin_username"]])) return true;
      return false;
    }

    public static function UserExists($user) {
      $sql = MySql::conn()->prepare("SELECT id FROM admin WHERE username = ?");
      $sql->execute([$user]);
      if ($sql->rowCount() == 1) return true;

      return false;
    }

    public function RegisterUser($name, $username, $password, $role) {
      $sql = MySql::conn()->prepare("INSERT INTO admim (name, username, password, role) VALUES (?, ?, ?, ?)");
      $sql->execute([$name, $username, $password, $role]);
    }
	}
?>