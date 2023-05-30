<?php
    session_start();
    require __DIR__.'/user_controller.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_SESSION["logged_user"])){
            $user = $_POST["username"];
            $pass = $_POST["password"];
            if(login($user, $pass)){
                $_SESSION["logged_user"] = $user;
                header('Location: /');
            }else{
                header('Location: /signin.php');
            }
        }else{
            header('Location: /');
        }
    }
?>