<?php

$username = 'root';
$dsn = 'mysql:host=localhost; dbname=register';
$password = '';

try{
  $db = new PDO('mysql:host=localhost; dbname=register', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  #echo "Connected to the register database";
}
  catch (PDOException $ex){
    echo "connection failed".$ex->getMessage();
  }
