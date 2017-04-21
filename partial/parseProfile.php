<?php

include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if((isset($_SESSION['id']) || isset($_GET['user_identity'])) && !isset($_POST['updateProfileBtn'])){
  if (isset($_GET['user_identity'])) {
    $url_encoded_id = $_GET['user_identity'];
    $decode_id = base64_decode($url_encoded_id);
    $user_id_array = explode("encodeuserid", $decode_id);
    $id = $user_id_array[1];
  }else {
    $id = $_SESSION['id'];
  }

  $sqlQuery = "SELECT * FROM users WHERE id = :id";
  $statement = $db->prepare($sqlQuery);
  $statement->execute(array(':id' => $id));

  while ($rs = $statement->fetch()) {
    $username = $rs['username'];
    $email = $rs['email'];
    $date_joined = strftime("%b %d, %Y", strtotime($rs["join_date"]));
    # code...
  }
  $encode_id = base64_encode("encodeuserid{$id}");
}
