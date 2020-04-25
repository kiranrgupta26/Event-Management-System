<?php
session_start();

include 'connection.php';
$user = $_SESSION["userid"];
$username = $_SESSION["username"];
$eventid = $_GET["eventid"];
$conn = OpenCon();

$sql = "Delete from participate where eventID='$eventid' and userID='$user'";
$result = mysqli_query($conn, $sql);
header('Location: MyEvents.php');
exit();
?>