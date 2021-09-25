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

  const INCLUDE_PATH = 'http://10.0.0.62/projeto05-2/';
  const INCLUDE_PATH_DASHBOARD = 'http://localhost/projeto05-2/dashboard/';

  function getMenu($url, $page) {
  	if ($url == $page) {
			echo 'style="font-weight: 700;"';
  	} else {
  		return;
  	}
  }
?>