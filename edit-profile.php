<?php include_once 'partial/parseProfile.php' ?>

<h2>Edit profile</h2>
<div class="">
  <?php if (isset($result)) {
    echo $result;
  } ?>
  <?php if (!empty($form_errors)) {
    echo show_errors($form_errors);
  } ?>
</div>

<?php if(!isset($_SESSION['username'])): {
  # code...
} ?>
<p>please login</p>
<?php else: ?>
  <form class="" action="" method="post">
    <div class="form-group">
        <label for="emailField">Email</label>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>">
    </div>

    <div class="form-group">
        <label for="usernameField">Username</label>
        <input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>">
    </div>
    <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
    <button type="submit" name="updateProfileBtn">Update profle</button>
  </form>
<?php endif ?>
<p>Back</p>
