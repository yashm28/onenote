<?php
include("header.php");
include("database.php");
session_start();
$sub=$_GET["subject"];
$user=$_SESSION["username"];

$delete="DELETE FROM `$user` WHERE `$user`.`subject`='$sub'";
echo $delete;
$rs=mysql_query($delete);
$rs=mysql_query($delete)or die("Could Not Perform the Query");
header("location:see.php");
?>
