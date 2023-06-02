<?php
    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_SESSION["logged_user"])){
            $role = explode(";",$_SESSION["logged_user"])[0];
            echo $_SESSION["logged_user"];
            if ($role == "1"){
                echo "<h1>Authenticated !</h1>";
                return;
            }
        }
        echo "<h1>Restricted page, please make sure you have the right access !</h1>";
    }
?>