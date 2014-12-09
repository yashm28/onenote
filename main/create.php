<?php
include("header.php");
include("database.php");
session_start();
?>
<html>
<head>
<title>Welcome to OneNOTES</title>
<link href="css.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style9 {
	color: #FF0000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 24px;
	font-weight: bold;
	font-style: italic;
}
.style10 {color: #FF0000; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-weight: bold; font-style: italic; }
-->
</style>
</head>
<body>
<blockquote>
  <center>
    <h3><a href="see.php" class="style10">SEE your note</a></h3>
  </center>
</blockquote>
<center>
<form method="get" action="storenote.php" name="create">
  <table width="1214" height="301">
    <tr>
      <td width="983" height="32">Subject::</td>
      <td width="215"></td>
    </tr>
    <tr>
      <td height="35"><input type="text" name="subject" id="subject" ></td>
      <td></td>
    </tr>
    <tr>
      <td width="983" height="37">Note::</td>
      <td width="215"></td>
    </tr>
    <tr>
      <td height="185" align="left" valign="middle"><textarea name="note" id="note" cols="100" rows="20"></textarea></td>
      <td><input type="submit" name="sub111" value="store">
          <br>
        <input name="reset" type="reset"  value="Clear">        </td>
    </tr>
      </table>
	  </form>
  </center>


</body>
</html>