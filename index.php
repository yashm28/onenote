
<html>
<head>
<title>Wel come to OneNOTES</title>
<link href="css.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
session_start();
//hi

if(isset($_POST["submit"]))
{
$a=$_POST["usernm"];
$b=$_POST["pas"];
$check="SELECT * FROM signup WHERE `user`='$a' AND `pass`='$b'";
$result=mysql_query($check);

$count=mysql_num_rows($result);


if($count==1){
 $_SESSION["username"]=$a;
header("location:first.php");
}
else {
$f=1;
}
}

?>
<table width="100%" border="0">
  <tr>
    <td width="70%" height="25">&nbsp;</td>
    <td width="1%" rowspan="2" bgcolor="#009933"><span class="style6"></span></td>
    <td width="29%" bgcolor="#009933"><div align="center" class="style1"><b>User Login </b></div></td>
  </tr>
  <tr>
    <td height="296" valign="top"><div align="center">
        <h1 class="style8">Wel come to Online Notepad OneONTES</h1>
      <span class="style5"><img src="image/paathshala.jpg" width="129" height="100"><span class="style7"><img src="image/HLPBUTT2.JPG" width="50" height="50"><img src="image/BOOKPG.JPG" width="43" height="43"></span>        </span>

    </div></td>
    <td valign="top"><form name="form" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td>User Name </td>
          <td><input name="usernm" type="text" id="usernm"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input name="pas" type="password" id="pas"></td>
        </tr>
        <tr>
          <td colspan="2"><span class="errors">
            <?php
		  if(isset($f))
		  {
		  	echo "<font color='red'> Invalid Username or Password</font>";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align=center class="errors">
		  <input name="submit" type="submit" id="submit" value="Login">		  </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#009933"><div align="center"><span class="style4"><b>New User ? <a href="signup.php">Signup Free</b></a></span></div></td>
          </tr>
      </table>
      <div align="center">
        <p class="style5"><img src="images/topleft.jpg" width="134" height="128">          </p>
        </div>
    </form></td>
  </tr>
</table>

</body>
</html>

