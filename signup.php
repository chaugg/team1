<?php
include_once 'resource/Database.php';
// dump
//var_dump($_POST);

//form validate
if (isset($_POST['signupBtn'])){
  // init Array
  $form_errors = array();

  //validate
  $required_fields = array('email', 'username', 'password');

  // loop require field

  foreach($required_fields as $name_of_field){
    if (!isset($_POST[$name_of_field]) || $_POST[$name_of_field] == NULL){
      $form_errors[] = $name_of_field ." is a required";
    }
  }
// check if array is EmptyIterator
    if(empty($form_errors)){
    //collect data and SplObjectStorage
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    //hashing password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

      try {
        $sqlInsert = "INSERT INTO users (username, email, password, join_date)
        VALUES (:username, :email, :password, now())";

        //sanitize Data
        $statement = $db->prepare($sqlInsert);

        //add data to database
        $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));
        if($statement->rowCount() == 1){
        $result = "<p style = 'padding: 20px; color:green;'> Registration
        successful</p>";
      }

    }catch (PDOException $ex) {
        $result = "<p style = 'padding: 20px; color:red;'> Error! ".$ex->getMessage()."
        </p>";
      }}
  else{
    if(count($form_errors) == 1){
      $result = "<p style = 'color: red;'> There was 1 error in the form<br>";
      $result .= "<ul style = 'color: red;'>";

    foreach($form_errors as $error) {
      $result .= "<li> {$error}</li>";
    }
    $result .= "</ul></p>";
  }else{
    $result = "<p style = 'color : red;'> There were " .count($form_errors). " errors in the form <br>";
    $result .= "<ul style='color: red;'>";

    //loop errors and display
    foreach ($form_errors as $error) {
      $result .= "<li>{$error}</li>";
    }
    $result .= "</ul></p>";
  }

}}

 ?>


<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register page</title>
</head>
<body>
<h2>User Authentication System </h2><hr>
<h3>Register Form</h3>
<?php if (isset($result)) echo $result; ?>
<form method = "post" action="">
  <table>
    <tr>
      <td>Email:</td><td><input type="text" name="email" value=""></td>
    </tr>
    <tr>
      <td>Username:</td><td><input type="text" name="username" value=""></td>
    </tr>
    <tr>
      <td>Password:</td><td><input type="password" name="password" value=""></td>
    </tr>
    <tr>
      <td></td><td><input style ="float : right" type="submit" name="signupBtn" value="Signup"></td>
    </tr>
  </table>

<p><a href ="index.php">Back</a></p>
</body>
</html>
