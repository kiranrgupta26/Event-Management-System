<?php

include 'connection.php';

$conn = OpenCon();

$query = "SELECT eventID,eventName,adminID,email,location,date,time,phone FROM event"; 
$result = mysqli_query($conn, $query); 

if (mysqli_num_rows($result) > 0) {
	echo "<table id='displayevent'><tr><th>Event Name</th><th>Event Date</th><th>Action</th></tr>";
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>" . $row['eventName'] . "</td><td>" . $row['date'] . "</td><td>" . "<a href='EditEvent.html'>Edit</a> </td></tr>";
	}
	echo "</table>";
}
?>