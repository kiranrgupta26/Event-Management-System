<?php
include 'connection.php';
$user = $_GET["user"];
$username = $_GET["username"];
$eventid = $_GET["eventid"];
$conn = OpenCon();

$sql = "Delete from participate where eventID='$eventid' and userID='$user'";
$result = mysqli_query($conn, $sql);
header("Location: MyEvents.php?user=".$username);
?>