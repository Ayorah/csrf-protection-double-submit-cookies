<?php

  session_start();
  session_unset();
  session_destroy();

  unset($_COOKIE['Assignment2_session_cookie']);

  setcookie('PHPSESSID', '', time() - 3600, '/');
  setcookie('Assignment2_session_cookie', '', time() - 3600, '/');
  setcookie('csrf_token', '', time() - 3600, '/','localhost',true);
	header("Location:index.php");
  exit

?>
