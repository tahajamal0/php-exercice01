<?php
    session_start();
    require __DIR__.'/../Controller/UserController.php';
    $controller = new UserController();

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_SESSION["logged_user"])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            if($controller->login($username, $password)){
                $user = $controller->getUserByName($username);
                $_SESSION["logged_user"] = $user->getRole() . ";" . $user->getUsername();
                header('Location: /');
            }else{
                header('Location: /src/Views/signin.php');
            }
        }else{
            header('Location: /');
        }
    }
?>