<?php
include("header.php");
include("database.php");
session_start();
$a=$_POST["user"];
$b=$_POST["pass"];
$c=$_POST["name"];
$d=$_POST["address"];
$e=$_POST["city"];
$f=$_POST["phone"];
$g=$_POST["email"];
$cre="CREATE TABLE  `note`.`$a` (
`no.` INT NOT NULL AUTO_INCREMENT ,
`subject` VARCHAR( 50 ) NOT NULL ,
`note` VARCHAR( 1000 ) NOT NULL ,
PRIMARY KEY (  `no.` )
) ";
mysql_query($cre);

echo mysql_query($cre);
$table="INSERT INTO  `note`.`signup` (
`user` ,
`pass` ,
`name` ,
`add` ,
`city` ,
`phone` ,
`email`
)
VALUES (
'$a',  '$b',  'c',  '$d',  'e',  'f',  'g'
)";	

$rs=mysql_query($table)or die("Could Not Perform the Query");
echo "<br><br><br><div class=head1>Your Login ID  $lid Created Sucessfully</div>";
echo "<br><div class=head1>Please Login using your Login ID </div>";
echo "<br><div class=head1><a href=index.php>Login</a></div>";

?>