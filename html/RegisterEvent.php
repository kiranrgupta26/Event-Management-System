<?php
session_start();
if(!isset($_SESSION['username'])){
  	header('Location:default1.php');
  }
?>
<!-- Gupta,Kiran Rambilas : 1001726759
Deo, Neel Jayant : 1001773075 -->
<!DOCTYPE html>
<html>
<head>
	<title>Register For Event</title>
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
  			<h1>REGISTER FOR EVENT</h1>
  		</div>
	</div>

	<nav class="sidemenu">
		<ul>
			<?php  echo "<li><a href='MyEvents.php'>My Events</a></li>"; ?>
			<?php echo "<li><a class='active' href='RegisterEvent.php'>Register For Event</a></li>"; ?>	  
		  <?php  
		  echo "<li><a href='default1.php'>Logout</a></li>";
		  ?>
		</ul>
	</nav>


	<div class="eventstable">
  <?php
        
		include 'connection.php';
		$username= $_SESSION["username"];
		
		$conn = OpenCon();

		$sql = "select eventID,eventName,location,date,time from event";
		$result = mysqli_query($conn,$sql);

	
	if (mysqli_num_rows($result) > 0) {
		echo "<table id='displayevent'><tr><th>Events</th><th>Date</th><th>View</th><th>Action</th></tr>";
		while($row = mysqli_fetch_assoc($result))
		{
			echo "<tr><td>".$row['eventName'] . "</td><td>" .$row['date'] ."</td><td><a href='EventInfo.php?eventid=". $row['eventID']. "'>Info</a></td><td> <a href='register_event.php?eventid=".$row['eventID']."'>Register</a></td></tr>";
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