<?php include_once 'Database.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php

      if (isset($_POST["save"])) {
        $id_user = $_POST["id_user"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $level = $_POST["level"];
        $sqlQuery = "UPDATE users SET username = '$username', email = '$email', level = '$level' WHERE id = $id_user";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array());
        echo "Success";
        header("location: ../manageuser.php");
      }

      $id = "";
      $username = "";
      $email = "";
      $level = "";
      if (isset($_GET["id"])) {
        //get user infomation
        $id = $_GET["id"];
        $sqlQuery = "SELECT * FROM users where id = $id";
        $statement = $db->prepare($sqlQuery);
        $statement->execute(array());
        while ( $data = $statement->fetch()) {
          $username = $data["username"];
          $email = $data["email"];
          $level = $data["level"];
        }
      }
      ?>
      <h3> Member info</h3>
      <form method="POST" name="fr_update">
        <table class="table">
          <caption>Edit User</caption>
          <input type="hidden" name="id_user" value="<?php echo $id; ?>">
          <tr><td>Username : </td><td><input type="text" name="username" value="<?php echo $username; ?>" /></td></tr>
          <tr><td>Email : </td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td></tr>
          <tr>
            <td>Group : </td>
            <td>
              <select name="level">
                <option value="1" <?php echo ($level == 1)?"selected":""; ?>>Administrator</option>
                <option value="0" <?php echo ($level == 2)?"selected":""; ?>>Member</option>
              </select>
            </td>
          </tr>
          <tr><td colspan="2"><input type="submit" name="save" value="Lưu thông tin"></td></tr>
        </table>
      </form>
    </div>

    </div><!-- /.container -->
  </body
  </html>
