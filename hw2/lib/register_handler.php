<?php

  require_once 'db_connection.php';
  session_start();

  $username = $_POST['username'] ?? null;
  $password = $_POST['password'] ?? null;

  global $dbConnection;

  $statement = $dbConnection->prepare( "SELECT * FROM users where username = ?" );
  $statement->execute( [ $username ] );
  $result = $statement->fetch( PDO::FETCH_ASSOC );
  if( $statement->rowCount() > 0 ) {
    header( 'Location: ../register.php?error=already_exists' );
  }
  else {
    $statement = $dbConnection->prepare( "INSERT INTO users (username, password) VALUES (?, MD5(?))" );
    $statement->execute( [ $username, $password ] );
    echo "Account created";
    $_SESSION['logged_in'] = true;
    $_SESSION['username'] = $username;
    $_SESSION['user_id'] = $dbConnection->lastInsertId();
    header( 'Location: ../index.php' );
  }
