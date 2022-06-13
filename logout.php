<?php
session_start();
require_once "config.php";
unset($_SESSION['access_token']);
$gClient->revokeToken();
unset($_SESSION['username']);
session_destroy();


header("location:index.php");

?>