<?php 
  require_once 'lib/utils.php';
  checkLogin();
  include_once 'lib/styles.html';
  include_once 'topnav.php';
?>

<main>
  <h1>Profile</h1>
  <p>Edit your password below:</p>
  <form action="lib/edit_profile_handler.php" method="POST">
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <br/>
    <button type="submit">Update</button>
  </form>
  <?php if($_GET['success'] ?? false) { ?>
    <p style="color:green">Password updated successfully!</p>
  <?php } ?>
</main>