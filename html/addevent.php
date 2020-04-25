<?php
if(isset($_POST["add"]))
{
	include 'connection.php';

	$eventname = $_POST["eventname"];
	$eventdate = $_POST["eventdate"];
	$eventtime = $_POST["eventtime"];
	$eventlocation = $_POST["eventlocation"];
	$eventresponsible = $_POST["eventresponsible"];
	$eventtel = $_POST["eventtel"];
	$userid =$_POST["userid"]; 
	$eventdesc = $_POST["eventdesc"];
	$file = $_POST["image"];
	$username = $_SESSION["username"];
	$conn = OpenCon();

	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$imageProperties = getimageSize($_FILES['image']['tmp_name']);	

	$query = "SELECT eventID FROM event"; 
	$result = mysqli_query($conn, $query); 

	$row = mysqli_num_rows($result)+1; 

	$sql = "INSERT INTO event (eventID,eventName, adminID,email, location,date,time,phone,img,eventdesc,imageType) VALUES ('$row','$eventname', '$userid','$eventresponsible', '$eventlocation','$eventdate','$eventtime','$eventtel','{$image}','$eventdesc','{$imageProperties['mime']}')";

	mysqli_query($conn,$sql);
	header('Location: Events.php');
	exit();
}

?>