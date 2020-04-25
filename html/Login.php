<?php
session_start();
$errors = array();

if (isset($_POST['login'])) {
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
			$_SESSION["username"] = $username;
			header('Location:Events.php');
			exit();
			//echo "<script>window.top.location='http://krg6759.uta.cloud/gupta_ciudad/html/Events.php?user=".$username."'</script>";
		}
		else
		{
		 
		 	$_SESSION["username"] = $username;
			header('Location:RegisterEvent.php');
			exit();  
		    //echo "<script>window.top.location='http://krg6759.uta.cloud/gupta_ciudad/html/RegisterEvent.php?user=".$username."'</script>";
			
		}
	}
	else
	{
		//echo "This is a test";
		array_push($errors, "Wrong username/password combination");
		//header('Location:default1.php');
		//exit();  
	}
}
if(isset($_POST['reg_user']))
{
	include 'connection.php';
	$errors = array();
	$conn = OpenCon();

	$isadmin = $_POST['registertype'];
	$NombreCompleto = $_POST['NombreCompleto'];
	$Correo = $_POST['Correo'];
	$Telefono = $_POST['Telefono'];
	$Origen = $_POST['Origen'];
	$password = $_POST['password'];
	$confirmpassword = $_POST['confirmpassword'];

	if($isadmin == "admin")
	{
		$is_a_admin = 1;
	}
	else
	{
		$is_a_admin = 0;
	}

	$query = "select email from user where email='$Correo'";
	$result = mysqli_query($conn,$query);
	if(mysqli_num_rows($result) > 0)
	{
			array_push($errors,"Email Id ALready Exists");
			//header('Location: default1.php');
			//exit();
	}
	else
	{
		$sql = "Insert into user(name,password,email,phone,country,isadmin) values('$NombreCompleto','$password','$Correo','$Telefono','$Origen','$is_a_admin')";

		mysqli_query($conn,$sql);
		$msg = $NombreCompleto." has Successfully Registered";
		$msg = wordwrap($msg,70);
		$headers = "From: ".$Correo;
		mail("njd3075@utacloud.reclaimhosting.com","Registration",$msg, $headers);
		if($isadmin == "admin")
		{
			$_SESSION["username"] = $Correo;
			header('Location:Events.php');
			exit();
			//echo "<script>window.top.location='http://krg6759.uta.cloud/gupta_ciudad/html/Events.php?user=".$Correo."'</script>";
		}
		else
		{
		   	$_SESSION["username"] = $Correo;
			header('Location:RegisterEvent.php');
			exit();
		    //echo "<script>window.top.location='http://krg6759.uta.cloud/gupta_ciudad/html/RegisterEvent.php?user=".$Correo."'</script>";
			
		}
	}
}
?>