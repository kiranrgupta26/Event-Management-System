<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->
<?php 
  session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Events Registration</title>
	<link rel="stylesheet" media="screen and (max-width: 600px)" href="../css/cuidad1.css">
	<link rel="stylesheet" type="text/css" href="../css/cuidad.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<header class="topmenu">
		<img src="../img/Logotipo.png">
		<nav>		
			<a href="default1.php">Inicio </a> /
			<a href="Nosotros.html">Nosotros </a> /
			<a href="Equipos.html">Equipos </a> /
			<a href="http://krg6759.uta.cloud/">Blog </a> /
			<a href="Contact Us.html">Contacto </a> 
		</nav>
		
	</header>

	<div class="container">
  		<img src="../img/homepage-one-banner.jpg" alt="Snow" style="width:100%; height: 100%;">
  		<div class="centered">
  			<h1>EVENTS REGISTRATION</h1>
  		</div>
	</div>

	<nav class="sidemenu">
		<ul>
		  <?php  echo "<li><a class='active' href='Events.php?user=". $_GET['user']."'>Events</a></li>"; ?>
		  <?php  echo "<li><a href='displaycontactus.php?user=". $_GET['user']."'>Contact Us</a></li>"; ?>
		  <li><a href="default1.php">Logout</a></li>
		</ul>
	</nav>

	<div class="eventstable">

	
	<?php

	include 'connection.php';

	$conn = OpenCon();
	$username = $_GET['user'];
	$sql = "select userid from user where email='$username'";
	$result1 = mysqli_query($conn, $sql); 
	if (mysqli_num_rows($result1) > 0) {
		while($row = mysqli_fetch_assoc($result1)){
			$userid = $row['userid'];
			$query = "SELECT eventID,eventName,adminID,email,location,date,time,phone FROM event where adminID='$userid'"; 
			$result = mysqli_query($conn, $query); 
			if (mysqli_num_rows($result) > 0) {
			echo "<table id='displayevent'><tr><th>Event Name</th><th>Event Date</th><th colspan='4'>Action</th></tr>";
			while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>" . $row['eventName'] . "</td><td>" . $row['date'] . "</td><td>" . "<a href='EditEvent.php?eventname=" .$row['eventName']. "&eventlocation=" .$row['location']. "&eventresponsible=".$row['email'] . "&mobile=" .$row['phone'] . "&eventid=".$row['eventID'] . "&eventdate=".$row['date'] . "&eventtime=". $row['time']."&name=".$username."'>Edit</a> </td> 
				<td><a href='DeleteEvent.php?eventname=" .$row['eventName']. "&eventlocation=" .$row['location']. "&eventresponsible=".$row['email'] . "&mobile=" .$row['phone'] . "&eventid=".$row['eventID'] . "&eventdate=".$row['date'] . "&eventtime=". $row['time']."&name=".$username."'>Delete</td><td><a href='ViewParticipants.php?eventid=".$row['eventID'] ."&name=".$username."'>View Participants</td><td><a href='EventInfo.php?eventid=". $row['eventID']. "'>Info</a></td></tr>";
			}
		echo "</table>";
		}
		echo "<button type='button' class='enviar'><a href='Add_Event.php?user=".$userid."&name=".$username."'>Add New Event</a></button>";
	}
	}

	?>

  <!-- <button type="button" class="enviar" onClick="location.href='Add_Event.php?user=1'">Add New Event</button> -->
</div>

	

	<footer id="wrapper">
		<div class="footer-2">
			<li><img src="../img/email1.png"></li>				
				<li><img src="../img/twitter_grey.png"></li>
				<li><img src="../img/instagram_grey.png"></li>
		</div>
		<div class="footer-3">
			<ul id="footer-apps">
				<li>
					DiazApps
				</li>
				<li>
					&copy; 2020 All rights Reserved
				</li>
			</ul>
		</div>
	</footer>
</body>
</html>