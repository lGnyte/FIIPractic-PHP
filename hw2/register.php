<?php 
  session_start();
  include_once 'lib/styles.html';
  include_once 'topnav.php';
?>

<main>
  <h1>Register</h1>
  <form action="lib/register_handler.php" method="POST">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
    <br/>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <br/>
    <button type="submit">Register</button>
  </form>
  <div>
    <?php if( isset( $_GET['error'] ) && $_GET['error'] === "already_exists" ) { ?>
      <p style="color: red;">Username already exists!</p>
    <?php } ?>
  </div>
</main>
