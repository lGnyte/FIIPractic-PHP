<?php
    /**
     * This is our home page
     * Add some CSS rules in the header.html file and include it everywhere
     */
    
    session_start();
    if( $_SESSION['logged_in'] ?? false ) { ?>
        i'm logged in <br>
        <a href="logout.php">logout</a> |
        <a href="dashboard.php">dashboard</a> |
        <br/>
    <?php }
    else {
        include_once 'login_form.php';
        include_once  'register_form.php';
    }
