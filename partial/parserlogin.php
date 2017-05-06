<?php
include_once 'resource/Database.php';
include_once 'resource/utilities.php';

if(isset($_POST['loginBtn'])){
    $form_errors = array();
    $required_fields = array('username', 'password');
    $form_errors = array_merge($form_errors, check_empty_fields($required_fields));
    if(empty($form_errors)){
        $user = $_POST['username'];
        $password = $_POST['password'];
        $sqlQuery = "SELECT * FROM users WHERE username = :username";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array(':username' => $user));

       while($row = $statement->fetch()){
           $id = $row['id'];
           $hashed_password = $row['password'];
           $username = $row['username'];

           if(password_verify($password, $hashed_password)){
               $_SESSION['id'] = $id;
               $_SESSION['username'] = $username;
               echo $welcome = "<script type=\"text/javascript\">
                          swal({title:\"Good job!\",
                                text:\"Welcome back!\",
                                type: 'success',
                                timer: 5000,
                                showConfirmButton: false });

                          setTimeout(function(){
                            windows.location.href='home.php';
                            }, 5000);
                          </script>";
           }else{
               $result = "<p style='padding: 20px; color: red; border: 1px solid gray;'> Invalid username or password</p>";
           }
       }

    }else{
        if(count($form_errors) == 1){
            $result = "<p style='color: red;'>There was one error in the form </p>";
        }else{
            $result = "<p style='color: red;'>There were " .count($form_errors). " error in the form </p>";
        }
    }
}
