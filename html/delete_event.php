<?php
if(isset($_POST["delete"]))
{
	include 'connection.php';

	$eventid = $_POST["eventid"];
	$conn = OpenCon();

	$sql = "delete from event where eventID = '$eventid'";

	mysqli_query($conn,$sql);
	header('Location: Events.php');
	exit();
}
?>