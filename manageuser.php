<?php
include_once 'resource/Database.php';
include_once 'resource/utilities.php';
include_once 'resource/session.php';
?>

<!-- <?php if(!isset($_SESSION['username'])): ?>
  <P class="userbar">You are currently not signin <a href="login.php">Login</a> Not yet a member? <a href="signup.php">Signup</a> </P>
<?php else: ?>
  <p class="userbar">Welcome back<?php if(isset($_SESSION['username'])) echo $_SESSION['username']; ?> <a href="logout.php">Logout</a>
  <a href="note/ax.php"> Message</a> </p>
<?php endif ?> -->

  <?php if (!isset($_SESSION['username'])):  ?>
  <p> Your are not authorized to view this page </p>
    <?php else: ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/boostrap.min.js" charset="utf-8"></script>
  <script src="js/jquerry-3.2.1.min.js" charset="utf-8"></script>
</head>
  <body>
    <?php
    // $stmt = $db->prepare("SELECT username FROM users");
    // $stmt->execute();
    // $row = $stmt->fetchAll();
    // foreach( $row as $result ) {
    //   echo $result["username"];
    // }

    ?>

    <div class="container">
      <div class="row">
        <h3> Quản lý thành viên</h3>
        <table class="table">
          <caption>Danh sách thành viên đã đăng ký</caption>
          <thead>
            <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email</th>
              <th>Group</th>
              <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $sqlQuery = "SELECT * FROM users";
              $statement = $db->prepare($sqlQuery);
              $statement->execute(array());
              // $row = $stmt->fetchAll();

              while ($rs = $statement->fetch()) {
                $id = $rs['id'];
                $username = $rs['username'];
                $email = $rs['email'];
                $level = $rs['level'];
                ?>
                <tr>
                  <th scope="row"><?php echo $id ?></th>
                  <td><?php echo $username; ?></td>
                  <td><?php echo $email; ?></td>
                  <td>
                    <?php
                    if ($level == 1) {
                      echo "Administrator";
                    }else{
                      echo "Member";
                    }
                    ?>
                  </td>
                  <td><a href="resource/deleteuser.php?id=<?php echo $id; ?>">Delete</a> <a href="resource/edituser.php?id=<?php echo $id; ?>">Edit</a></td>
                </tr>
                <?php
              }
              ?>
            </tbody>
          </table>
        </div>

      </div><!-- /.container -->

    </body>
    </html>

    <?php endif ?>
