<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//require_once 'backCode/sessionManger.php';
//$sessionAbout = new sessionMangerAll;
//unset($_SESSION['emp']);
session_start();
session_unset();
//session_destroy();

//$sessionAbout->destroy_Session();
header("Location: ../index.php");
exit();
?>