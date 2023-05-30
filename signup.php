<?php
    require 'base.php';
    echo "<link rel='stylesheet' href='static/styles/signin.css'>";
?>

<form class="signup-form" action="src/Controller/register.php" method="post">
    <input class="form-input form-input--text" type="text" name="username" placeholder="Username" required>
    <input class="form-input form-input--password" type="password" name="password" placeholder="Password" required>
    <input class="btn" type="submit" value="Register">
</form>