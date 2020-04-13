<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "krg6759_wdm_blog_website1";


 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);

 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>