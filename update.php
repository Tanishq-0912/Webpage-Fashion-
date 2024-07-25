<?php
include("include/connection.php");
if(isset($_GET['uid']))
{
$id=$_GET['uid'];
$sql=mysqli_query($con,"select * from contact where id='$id'");
$row=mysqli_fetch_array($sql);
}
else
{
$hid=$_POST['hid'];
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql=mysqli_query($con,"UPDATE contact SET name='$name',email='$email',subject='$subject',message='$message' where id='$hid'");
header("location:view.php");

}
?>
<html>
<head>
<title>Update form</title>
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
  <h2>Update form</h2>
  <form action="update.php" method="POST">
  <input type="hidden" name="hid"	value="<?php echo $row['id'];?>"/>
  
  
<label for="fname">first name:</label></br>
<input type="text" name="name" value="<?php echo $row['name'];?>"/></br></br>
<label for="lname">email</label></br>
<input type="email" name="email" value="<?php echo $row['email'];?>"/></br></br></br>
<label for="lname">subject</label></br>
<input type="text" name="subject" value="<?php echo $row['subject'];?>"/></br></br>
<label for="lname">message</label></br>
<input type="text" name="message" value="<?php echo $row['message'];?>"/></br></br>
<input type="submit" name="update" value="update">
</form>
</div>
</body>
</html>