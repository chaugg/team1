<?php
include_once 'Database.php';

if (isset($_GET["id"])) {
	$id = $_GET["id"];
  $sqlQuery = "DELETE FROM users where id = $id";
  $statement = $db->prepare($sqlQuery);
  $statement->execute(array());
  echo "Success";
  header("location: ../manageuser.php");
}
?>
