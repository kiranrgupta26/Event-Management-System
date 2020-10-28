<?php
session_start();
include 'connection.php';
$conn = OpenCon();
$isadmin = $_POST['logintype'];
$username = $_POST['username'];
$password = $_POST['password'];
if($isadmin == "admin")
{
	$is_a_admin = 1;
}
else
{
	$is_a_admin = 0;
}
$sql = "select name from user where email = '$username' and password='$password' and isadmin='$is_a_admin'";
$result = mysqli_query($conn, $sql); 
if (mysqli_num_rows($result) > 0) {
	if($isadmin == "admin")
	{
		echo "<script>window.top.location='http://krg6759.uta.cloud/gupta_ciudad/html/Events.php?user=".$username."'</script>";
	}
	else
	{
	   
	    echo "<script>window.top.location='http://krg6759.uta.cloud/gupta_ciudad/html/RegisterEvent.php?user=".$username."'</script>";
		
	}
}
else
{
	header('Location: default1.php');
}
?>