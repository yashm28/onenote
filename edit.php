<?php
include("header.php");
include("database.php");
session_start();
$user=$_SESSION["username"];
$sub=$_GET["subject"];
$note=$_GET["note"];
$no=$_GET["no"];

echo '<html>
<body>
<form>
<ul>
<li>Note number</li>
<li><input type="text" name="n" value="';
echo $no;
echo '"></li>
<li>Subject:</li>
<input type="text" name="txt1" value="';
echo $sub; 
echo '">
<li>Note</li>
<textarea name="txt2" id="txt2" cols="100" rows="20"   >';
echo $note; 
echo '</textarea>

</ul>
<input type="submit" name="ss" value="Update">

</form>
</body>
</html>';

if(isset($_GET["ss"]))
{
$txt1=$_GET['txt1'];
$txt2=$_GET['txt2'];
$n=$_GET["n"];
$up="UPDATE  `note`.`$user` SET  `subject` =  '$txt1',
`note` =  '$txt2' WHERE  `$user`.`no.`='$n'";
$rs=mysql_query($up);
echo $up;
echo $rs;
if($rs)
{
	header("location:see.php?returnno=1");
}
else
{echo "there is some problem";}
}
?>
