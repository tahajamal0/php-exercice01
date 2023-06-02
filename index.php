<?php
    require __DIR__ . '/src/Views/base.php';
    $request = $_SERVER['REQUEST_URI'];

    switch ($request) {
        case '':
        case '/':
            if(!isset($_SESSION['logged_user'])){
                require __DIR__ . '/src/Views/signin.php';
            }else{
                echo "<h1>Home Page</h1>";
            }
            break;
        case '/admin':
            require __DIR__ . '/src/Views/admin.php';
            break;
        case '/public':
            require __DIR__ . '/src/Views/public.php';
            break; 
        case '/signup':
            require __DIR__ . '/src/Views/signup.php';
            break; 
        case '/signin':
            require __DIR__ . '/src/Views/signin.php';
            break; 
        case '/logout':
            require __DIR__ . '/src/Views/logout.php';
            break;
        default:
            echo "<h1>404 - Page not found !</h1>";
            break;
    }
?>