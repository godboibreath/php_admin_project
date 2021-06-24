<?php
$login = $_POST['login'];
$pas = $_POST['password'];
if ($login == 'godboibreath' && $pas == 0000)
  {
  session_start();
  $_SESSION['admin'] = true;
  $script = 'adminpanel.php';
  }
else
$script = 'administrator.php';
header("Location: $script");
?>