<?php
    require_once "connection.php";
    $conn = OpenCon();

        $sql = "SELECT imageType,img FROM event WHERE eventID=" . $_GET['eventid'];
		$result = mysqli_query($conn, $sql) or die("<b>Error:</b> Problem on Retrieving Image BLOB<br/>" . mysqli_error($conn));
		$row = mysqli_fetch_array($result);
		header("Content-type: " . $row["imageType"]);
        echo $row["img"];
	
		mysqli_close($conn);
?>