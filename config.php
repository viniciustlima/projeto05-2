<?php 
	session_start();
  date_default_timezone_set('America/Sao_Paulo');
  
  $auto_load = function ($class) {
    if ($class == 'Email') {
      require_once('classes/vendor/phpmailer/phpmailer/src/PHPMailer.php');
    }
    include('classes/'.$class.'.php');
  };
  
  spl_autoload_register($auto_load);

  define("INCLUDE_PATH", "http://10.0.0.62/projeto05-2/");
  define("INCLUDE_PATH_DASHBOARD", INCLUDE_PATH."dashboard/");

  $config = parse_ini_file("{$_SERVER["DOCUMENT_ROOT"]}/projeto05-2/config.ini", true);

  define("MAIL_HOST",      $config["email"]["host"]);
  define("MAIL_USER",      $config["email"]["user"]);
  define("MAIL_ADDRESS",   $config["email"]["address"] );
  define("MAIL_PASSWORD",  $config["email"]["password"]);

  define("MYSQL_HOST",     $config["mysql"]["host"]);
  define("MYSQL_USER",     $config["mysql"]["user"]);
  define("MYSQL_DATABASE", $config["mysql"]["database"]);
  define("MYSQL_PASSWORD", $config["mysql"]["password"]);

  function getMenu($url, $page) {
  	if ($url == $page) {
			echo ' style="font-weight: 700;"';
  	} else {
  		return;
  	}
  }
?>