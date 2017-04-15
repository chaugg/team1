<?php
include_once 'resource/Database.php';
// dump
//var_dump($_POST);
if (isset($_POST['email'])){
  $email = $_POST['email'];
  $username = $_POST['username'];
  $password = $_POST['password'];

  try {
    $sqlInsert = "INSERT INTO users (username, email, password, join_date)
    VALUES (:username, :email, :password, now())";

    $statement = $db->prepare($sqlInsert);
    $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $password));

    if($statement->rowCount() == 1){
      $result = "<p style = 'padding: 20px; color:green;'> Registration
      successful</p>";
    }
  } catch (PDOException $ex) {
    $result = "<p style = 'padding: 20px; color:red;'> Error! ".$ex->getMessage()."
    </p>";
  }
}
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
      <td>Password:</td><td><input type="text" name="password" value=""></td>
    </tr>
    <tr>
      <td></td><td><input style ="float : right" type="submit" name="" value="Signup"></td>
    </tr>
  </table>

<p><a href ="index.php">Back</a></p>
</body>
</html>
