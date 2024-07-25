<?php
include("include/connection.php");
if(isset($_GET['did']))
{
$a=$_GET['did'];
$sqi=mysqli_query($con,"DELETE FROM contact WHERE id='$a'");
header("Location:view.php");
}
else
{
	$sql=mysqli_query($con,"SELECT * FROM contact");
	$row=mysqli_fetch_array($sql); //$sql is working as a parameter
	$count=mysqli_num_rows ($sql);
}
?>
<html>
<head>
<title>Table</title>
</head>
<table border="2px" width="300px" height="50px">
<tr>
<td width="100px" height="50px">id</td>
<td width="100px" height="50px" >Name</td>
<td width="100px" height="50px" >Email</td>
<td width="100px" height="50px" >subject</td>
<td width="100px" height="50px" >message</td>
</tr>
<?php
if($count>0) {
$i=1;
do{
?>
<tr>
<td width="100px" height="50px" ><?php echo $i;?></td>
<td width="100px" height="50px" ><?php echo $row["name"];?></td>
<td width="100px" height="50px" ><?php echo $row["email"];?></td>
<td width="100px" height="50px" ><?php echo $row["subject"];?></td>
<td width="100px" height="50px" ><?php echo $row["message"];?></td>
<td width="100px" height="100px" >
<a href="view.php?did=<?php echo$row['id'];?>">delete</a>
<a href="update.php?uid=<?php echo $row['id'];?>">update</a>
</td>
</tr>
<?php
$i++;
}while($row=mysqli_fetch_array($sql));
}
?>
</table>
</body>
</html>


