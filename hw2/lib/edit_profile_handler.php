<?php
  require_once 'db_connection.php';
  session_start();
  
  $password = $_POST['password'] ?? null;
  
  global $dbConnection;
  $statement = $dbConnection->prepare( "UPDATE users SET password = MD5(?) WHERE id = ?" );
  $statement->execute( [ $password, $_SESSION['user_id'] ] );
  header( 'Location: ../profile.php?success=true' );
  