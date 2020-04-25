<?php
if(isset($_POST["update"])){


include 'connection.php';
$eventname = $_POST["eventname"];
$eventlocation = $_POST["eventlocation"];
$eventresponsible= $_POST["eventresponsible"];
$eventtel = $_POST["eventtel"];
$eventid = $_POST["eventid"];
$eventtime = $_POST["eventtime"];
$eventdate = $_POST["eventdate"];
$username = $_POST["username"];
$conn = OpenCon();

$sql = "Update event set eventName='$eventname' , email = '$eventresponsible' , location = '$eventlocation' , phone = '$eventtel' ,time ='$eventtime',date = '$eventdate' where eventID = '$eventid'";

mysqli_query($conn,$sql);

header('Location: Events.php');
exit();
}
?>