<?php
include_once 'partial/parseProfile.php';
include_once 'resource/session.php';
?>

<h2>Edit profile</h2>
<div class="">
  <?php if (isset($result)) {
    echo $result;
  } ?>
  <?php if (!empty($form_errors)) {
    echo show_errors($form_errors);
  } ?>
</div>

<?php if(!isset($_SESSION['username'])): ?>
<p>please login</p>
<?php else: ?>
  <form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="emailField">Email</label>
        <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>">
    </div>

    <div class="form-group">
        <label for="usernameField">Username</label>
        <input type="text" name="username" value="<?php if(isset($username)) echo $username; ?>">
    </div>

    <div class="form-group">
        <label for="fileField">Avatar</label>
        <input type="file" name="avatar" value="">
    </div>
    <input type="hidden" name="hidden_id" value="<?php if(isset($id)) echo $id; ?>">
    <button type="submit" name="updateProfileBtn">Update profle</button>
  </form>
<?php endif ?>
<p>Back</p>
