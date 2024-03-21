<?php
    /**
     *
     * @author        Delescu Andrei Vlad <ad@cloudlab-solutions.com>.
     * @copyright     Copyright(c) 2024 CloudLab AG (https://www.cloudlab-solutions.com/)
     * @link          https://www.cloudlab-solutions.com/
     * @date          2024.03.16
     */
    require_once 'db_connection.php';
    session_start();
    
    $username = $_POST['username'] ?? null;
    $password = $_POST['password'] ?? null;
    
    global $dbConnection;
    /*
     * Unsafe method to run SQL script
     * $statement = $dbConnection->query("SELECT * FROM users where username = '$username' AND password = '$password'");
     *
     * This allow attackers to run query that can damage your Database or retrieve sensitive informations
     * For example: '; DROP TABLE users; --
     * This will delete your entire users table
     */
    
    // To prevent SQL injection
    $statement = $dbConnection->prepare( "SELECT * FROM users where username = ? AND password = MD5(?)" );
    $statement->execute( [ $username, $password ] );
    $result = $statement->fetch( PDO::FETCH_ASSOC );
    if( $statement->rowCount() > 0 ) {
        $_SESSION['logged_in'] = true;
        echo 'logged in';
        header( 'Location: index.php' );
    }
    else {
        echo "There is no account registered with username \"" . $username . "\"";
        // Add a "Back" button
        // Add a "Register" button
    }
    
    // Notice we are expecting user password to be encrypted using MD5 algorithm
