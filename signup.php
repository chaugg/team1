<?php
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['signupBtn'])){
    $form_errors = array();
    $required_fields = array('email', 'username', 'password');

    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    $fields_to_check_length = array('username' => 4, 'password' => 6);
    $form_errors = array_merge($form_errors, check_min_length($fields_to_check_length));
    $form_errors = array_merge($form_errors, check_email($_POST));
    if(empty($form_errors)){
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        try{
            $sqlInsert = "INSERT INTO users (username, email, password, join_date)
              VALUES (:username, :email, :password, now())";
            $statement = $db->prepare($sqlInsert);
            $statement->execute(array(':username' => $username, ':email' => $email, ':password' => $hashed_password));
            if($statement->rowCount() == 1){
                $result = "<p style='padding:20px; border: 1px solid gray; color: green;'> Registration Successful</p>";
            }
        }catch (PDOException $ex){
            $result = "<p style='padding:20px; border: 1px solid gray; color: red;'> An error occurred: ".$ex->getMessage()."</p>";
        }
    }
    else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'> There was 1 error in the form<br>";
        }else{
            $result = "<p style='color: red;'> There were " .count($form_errors). " errors in the form <br>";
        }
    }

}

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Register Page</title>
</head>
<body>
<h2>User Registration </h2><hr>

<h3>Registration Form</h3>

<?php if(isset($result)) echo $result; ?>
<?php if(!empty($form_errors)) echo show_errors($form_errors); ?>
<form method="post" action="">
    <table>
        <tr><td>Email:</td> <td><input type="text" value="" name="email"></td></tr>
        <tr><td>Username:</td> <td><input type="text" value="" name="username"></td></tr>
        <tr><td>Password:</td> <td><input type="password" value="" name="password"></td></tr>
        <tr><td></td><td><input style="float: right;" type="submit" name="signupBtn" value="Signup"></td></tr>
    </table>
</form>
<p><a href="index.php">Back</a> </p>
</body>
</html>
