<?php
  function checkLogin() {
    session_start();

    if(empty($_SESSION['logged_in'])) {
      
      header('Location: index.php');
      exit;
    }

    return true;
  }
