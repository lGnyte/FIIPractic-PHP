<?php
    /**
     *
     * @author        Delescu Andrei Vlad <ad@cloudlab-solutions.com>.
     * @copyright     Copyright(c) 2024 CloudLab AG (https://www.cloudlab-solutions.com/)
     * @link          https://www.cloudlab-solutions.com/
     * @date          2024.03.16
     */
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbName = "fii_practic";
    
    try {
        $dbConnection = new PDO("mysql:host=$servername;dbname=$dbName", $username, $password);
        // set the PDO error mode to exception
        $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        exit;
    }
