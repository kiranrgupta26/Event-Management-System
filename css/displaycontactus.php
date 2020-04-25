<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="../css/cuidad.css">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
	<header class="topmenu">
		<img src="../img/Logotipo.png">
		<nav>		
			<a href="default.html">Inicio </a> /
			<a href="Nosotros.html">Nosotros </a> /
			<a href="Equipos.html">Equipos </a> /
			<a href="http://krg6759.uta.cloud/">Blog </a> /
			<a href="Contact Us.html">Contacto </a> 
		</nav>
		
	</header>

	<div class="container">
  		<img src="../img/homepage-one-banner.jpg" alt="Snow" style="width:100%; height: 100%;">
  		<div class="centered">
  			<h1>View Contact Us</h1>
  		</div>
	</div>

	<nav class="sidemenu">
		<ul>
		  <li><a href="Events.php">Events</a></li>
		  <li><a class="active" href="ViewParticipants.php">Participants</a></li>
		  <li><a href="displaycontactus.php">Contact Us</a></li>
		  
		  <li><a href="default.html">Logout</a></li>
		</ul>
	</nav>

	<div class="eventstable">
	<?php
		include 'connection.php';
		$conn = OpenCon();

		$eventid = $_GET['eventid'];
		
	$query = "select email,query,qDiscription from contactus ";
	$result1 = mysqli_query($conn,$query);
	if (mysqli_num_rows($result1) > 0) {
		echo "<table id='displayevent'><tr><th>Email</th><th>Query</th><th>Description</th></tr>";
		while($row = mysqli_fetch_assoc($result1))
		{
			echo "<tr><td>".$row['email'] . "</td><td>" . $row['query'] . "</td><td>" .$row['qDiscription'] ."</td></tr>";
		}
		echo "</table>";
	}	
	?>
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