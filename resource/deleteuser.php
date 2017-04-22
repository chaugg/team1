<?php
include_once 'Database.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
  $sqlQuery = "delete FROM users where id = $id";
	$statement = $db->prepare($sqlQuery);
	header('location: manageuser.php');
}
?>
