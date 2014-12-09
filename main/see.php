<?php
include("header.php");
include("database.php");
session_start();
$return=$_GET["returnno"];
if($return)
{echo "<center><font color='red' ><b><h4>Your note updated successfully</b></h4></font></center>";}
?>
<html>
<body>

<table border="5" width="800" align="center" cellspacing="0" cellpadding="5px">
	<tr>
	<td colspan="8" class="fill"><p><h1><center>Welcome <?php  echo $_SESSION['username']; ?></center></h1> </p>
   
    </td></tr>
    <tr>
    	<th width="73" class="fill">No.</th>
        <th width="171" class="fill">Subject</th>
        <th width="424" class="fill">Note</th>
       
        
  </tr>
        <?php
		$rr=0;
		$user=$_SESSION["username"];
			$sql = "SELECT * FROM `$user`";
			$result = mysql_query($sql);
			while($row = mysql_fetch_array($result))
			{
			
		?>
<tr>
	<td height="30" align="center"><?php $rr++; echo $rr; ?></td>
    <td align="center"><?php echo $row['subject'];?></td>
    <td align="center"><?php echo $row['note'];?></td>
    <td width="74"><a href="edit.php?subject=<?php echo $row['subject']; ?> &no=<?php echo $row['no.']; ?>& note=<?php echo $row['note'];?>" >Edit</a>&nbsp;
  <a href="delete.php?subject=<?php echo $row['subject']; ?>" onClick="return confirm('do u want to delete this Note?');"> Delete </a> </td>
	 
</tr>
    
    <?php } ?>
</table>    
<p>&nbsp;</p>

	
</body>
</html>

