<nav id="header">
  <a href="index.php">Home</a>
  <?php if($_SESSION['logged_in'] ?? false) {?>
    <a href="teme.php">Teme</a>
    <a href="profile.php">Profile</a>
    <a href="lib/logout_handler.php">Logout</a>
  <?php } else { ?>
    <a href="login.php">Login</a>
    <a href="register.php">Register</a>
  <?php } ?>
</nav>