<?php
    /**
     *
     * @author        Delescu Andrei Vlad <ad@cloudlab-solutions.com>.
     * @copyright     Copyright(c) 2024 CloudLab AG (https://www.cloudlab-solutions.com/)
     * @link          https://www.cloudlab-solutions.com/
     * @date          2024.03.16
     */
    
    function checkLogin() {
        session_start();
    
        // if customer is not logged in we redirect him to login page
        if(empty($_SESSION['logged_in'])) {
            header('Location: login_form.php');
            exit;
        }
        // else we return true
        return true;
    }
