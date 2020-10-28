<?php

include 'connection.php';

$errors = array();
$user = $_GET["user"];
$eventid = $_GET["eventid"];

$conn = OpenCon();
	
$query = "SELECT userID FROM user where email = '$user'"; 
$result = mysqli_query($conn, $query); 

if (mysqli_num_rows($result) > 0) {
	$row = mysqli_fetch_assoc($result);
	$userid = $row['userID'];

	$checksql = "Select eventID from participate where userID='$userid' and eventID='$eventid'";
	$result1 = mysqli_query($conn, $checksql); 
	if (mysqli_num_rows($result1) > 0)
	{
			array_push($errors,"You have already Registered for this Event");
	}
	else
	{
		$sql = "Insert into participate(eventID,userID) values ('$eventid','$userid')";
		mysqli_query($conn,$sql);
	}	
}
	
header("Location: RegisterEvent.php?user=".$user);
?>