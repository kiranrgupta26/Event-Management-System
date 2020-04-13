<?php
include 'connection.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "INSERT INTO contactus (contactID,email, query, qDiscription) VALUES (1,'tesmp@gmail.com', 'test', 'test');";
	if(mysqli_query($conn,$sql)){
		echo "INSERTed data successfully";
	}

CloseCon($conn);
?>