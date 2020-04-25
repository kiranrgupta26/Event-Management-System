
<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->

<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
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
  			<h1>ADD EVENTS</h1>
  		</div>
	</div>


	<div class="addevent">
			<?php
			include 'connection.php';

			$conn = OpenCon();
			$eventid = $_GET['eventid'];
			$sql = "select eventID,eventName,location,date,time,img,eventdesc from event where eventID='$eventid'";
			$result1 = mysqli_query($conn, $sql); 
			if (mysqli_num_rows($result1) > 0) {
				while($row = mysqli_fetch_assoc($result1)){
					echo "<ul><li class='addeventin'><img src='imageView.php?eventid=" .$row["eventID"]. "'/></li></ul>";
					/*echo "<ul><li class='addeventin'><img src='". $row['img']."'/> </li></ul>";*/
					echo "<ul>Event Name<li class='addeventin'>". $row['eventName']." </li></ul>";
					echo "<ul>Event Location<li class='addeventin'>". $row['location']."</li></ul>";
					echo "<ul>Event Date<li class='addeventin'>". $row['date']." </li></ul>";
					echo "<ul>Event Time<li class='addeventin'>". $row['time']."</li></ul>";
					echo "<ul>Event Description<li class='addeventin'>". $row['eventdesc']." </li></ul>";
				}
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