<?php
include 'connection.php';

$eventid = $_POST["eventid"];
$username = $_POST["username"];
$conn = OpenCon();

$sql = "delete from event where eventID = '$eventid'";

mysqli_query($conn,$sql);
header("Location: Events.php?user=".$username);
?>