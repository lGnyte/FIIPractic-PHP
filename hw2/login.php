<?php 
  include_once 'lib/styles.html';
  session_start();
  include_once 'topnav.php';
?>

<main>
  <h1>Login</h1>
  <form action="lib/login_handler.php" method="POST">
    <label for="username">Username</label>
    <input type="text" id="username" name="username">
    <br/>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
    <br/>
    <button type="submit">Login</button>
  </form>
  <div>
    <?php if( isset( $_GET['error'] ) && $_GET['error'] === "invalid_credentials" ) { ?>
      <p style="color: red;">Wrong username or password!</p>
    <?php } ?>
  </div>
</main>
