<?php
 session_start();

$_SESSION['login_status'] = false;
header("location:login.php");	

?>