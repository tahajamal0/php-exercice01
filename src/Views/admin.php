<?php
    require 'base.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET"){
        if(isset($_SESSION["logged_user"])){
            if ($_SESSION["logged_user"] == "admin"){
                echo "<h1>Authenticated !</h1>";
                return;
            }
        }
        echo "<h1>Restricted page, please make sure you have the right access !</h1>";
    }
?>