<?php
include("header.php");
include("database.php");
session_start();
if(isset($_GET["sub111"]))
{
$sub=$_GET["subject"];
$note=$_GET["note"];
$user=$_SESSION["username"];
$insert="INSERT INTO  `note`.`$user` (
`no.` ,
`subject` ,
`note`
)
VALUES (
NULL ,  '$sub',  '$note'
)";

$rs=mysql_query($insert)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your note stored Sucessfully</div>";

echo "<br><div class=head1><a href=first.php>Home</a></div>";
echo "<br><div class=head1><a href=create.php>Create another note</a></div>";
}

?>