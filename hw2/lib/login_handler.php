<?php
  require_once 'db_connection.php';
  session_start();
  
  $username = $_POST['username'] ?? null;
  $password = $_POST['password'] ?? null;
  
  global $dbConnection;
  $statement = $dbConnection->prepare( "SELECT * FROM users where username = ? AND password = MD5(?)" );
  $statement->execute( [ $username, $password ] );

  $result = $statement->fetch( PDO::FETCH_ASSOC );
  if( $statement->rowCount() > 0 ) {
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $result['id'];
    header( 'Location: ../index.php' );
  }
  else {
    header( 'Location: ../login.php?error=invalid_credentials' );
  }
  