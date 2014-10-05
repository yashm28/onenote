<?php
mysql_connect("localhost","root","") or die("Could not Connect My Sql");
session_start();
unset($_SESSION["username"]);
header("location:index.php");
?>