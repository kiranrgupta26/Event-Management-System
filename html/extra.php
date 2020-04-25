<?php
		include 'connection.php';
		$conn = OpenCon();

		$sql = "select eventID,eventName from event";
		$result = mysqli_query($conn,$sql);

		if (mysqli_num_rows($result) > 0) {
			echo "<select name=event value=''>Events</option>"; 
			while($row = mysqli_fetch_assoc($result)){
				echo "<option name=".$row['eventID']. ">".$row['eventName']."</option>"; 
			}
			echo "</select>";
		}
		
	$query = "select name,email,phone,country from user where userid in (select userID from participate where eventID=1)";
	$result1 = mysqli_query($conn,$query);
	if (mysqli_num_rows($result1) > 0) {
		echo "<table id='displayevent'><tr><th>Participants</th><th>Country</th><th>Email</th></tr>";
		while($row = mysqli_fetch_assoc($result1))
		{
			echo "<tr><td>".$row['name'] . "</td><td>" . $row['country'] . "</td><td>" .$row['email'] ."</td></tr>";
		}
		echo "</table>";
	}	
	?>