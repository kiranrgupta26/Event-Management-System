<?php
session_start();
if (isset($_POST['reg_user'])) {
$_SESSION["user"] = "kiran";
header('Locaton:test3.php');
exit();
}
?>