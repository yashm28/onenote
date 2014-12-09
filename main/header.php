<html>
<head>

<link href="css.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div class="div">
<center>
<h1 class="style9"><font color="#FFFFFF">OneNOTES</font></h1>
</center>
</div>
<?php
mysql_connect("localhost","root","") or die("Could not Connect My Sql");
session_start();
if(isset($_SESSION["username"]))
{

echo '<div align="right"><span class="style11"><a href="first.php">Home</a>
  <a href="logout.php" >|Logout</a></span></div>';
  }
  ?>
  
</body>
</html>

