<?php
include 'connection.php';
	$email = $_GET["email"];
	$query = $_GET["query"];
	$querydesc = $_GET["querydesc"];

	$conn = OpenCon();
	
	$query = "SELECT email FROM contactus"; 
	$result = mysqli_query($conn, $query); 

	$row = mysqli_num_rows($result)+1; 

	$sql = "INSERT INTO contactus (contactID,email, query, qDiscription) VALUES ('$row','$email', '$query', '$querydesc')";
	mysqli_query($conn,$sql);
	
?>
