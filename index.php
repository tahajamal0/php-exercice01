<?php
    session_start();

    if(!isset($_SESSION['logged_user'])){
        header('Location: src/Views/signin.php');
        die();
    }

    session_abort();

    require __DIR__ . '/src/Views/base.php';

    echo "<h1>Home Page</h1>";
?>