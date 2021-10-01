<?php 
	class MySql	{
		public static $pdo;
		public static function conn() {
			if (self::$pdo == null) {
				try {
					self::$pdo = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DATABASE, MYSQL_USER, MYSQL_PASSWORD, [PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"]);
					self::$pdo->SetAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				} catch (Expection $e) {
					echo '<div class="erro-box"><p>An error ocurred while trying to connect with the main database. If the problem persists, please contact our team: contact@company.com</p></div>';
				}
			}

			return self::$pdo;
		}
	}	
?>
