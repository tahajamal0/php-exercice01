<?php
    session_start();

    if(!isset($_SESSION['logged_user'])){
        header('Location: signin.php');
        die();
    }

    session_abort();

    require 'base.php';

    echo "<h1>Home Page</h1>";
?>