<?php
    session_start();
    require __DIR__.'/UserController.php';
    $controller = new UserController();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_SESSION["logged_user"])){
            $user = $_POST["username"];
            $pass = $_POST["password"];
            if($controller->sign_up($user, $pass)){
                header('Location: /src/Views/signin.php');
            }else{
                header('Location: /src/Views/signup.php');
            }
        }else{
            header('Location: /');
        }
    }
?>