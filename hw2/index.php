<?php 
  include_once 'lib/styles.html';
  session_start();
  include_once 'topnav.php'; 
?>

<main>
<?php
  if( $_SESSION['logged_in'] ?? false ) { ?>
    <h1>Hello, <?php echo $_SESSION['username'] ?>!</h1>
  <?php }
  else { ?>
    <h1>Home</h1>
    <p>No user logged in.</p>
  <?php }
