<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbName = "fii_practic";
  
  try {
    $dbConnection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
    $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
  }
