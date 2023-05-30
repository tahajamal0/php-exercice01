<?php
    session_start();
    require __DIR__.'/UserController.php';
    $controller = new UserController();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_SESSION["logged_user"])){
            $user = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
            if($controller->login($user, $pass)){
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