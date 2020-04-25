<?php
if(isset($_POST["contact"]))
{
	include 'connection.php';
	$email = $_POST["email"];
	$query = $_POST["query"];
	$querydesc = $_POST["querydesc"];

	$conn = OpenCon();
	
	$query1 = "SELECT email FROM contactus"; 
	$result = mysqli_query($conn, $query1); 

	$row = mysqli_num_rows($result)+1; 

	$sql = "INSERT INTO contactus (contactID,email, query, qDiscription) VALUES ('$row','$email', '$query', '$querydesc')";
	mysqli_query($conn,$sql);

	$msg = $email." has Sent you an Email";
	$msg = wordwrap($msg,70);
	$headers = "From: ".$Correo;
	mail("njd3075@utacloud.reclaimhosting.com","Queries",$msg, $headers);
	
}
?>
