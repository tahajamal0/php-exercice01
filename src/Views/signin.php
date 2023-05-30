<?php
    require 'base.php';
    echo "<link rel='stylesheet' href='/../static/styles/signin.css'>";
?>

<form class="signin-form" action="../Controller/auth.php" method="post">
    <input class="form-input form-input--text" type="text" name="username" placeholder="Username" required>
    <input class="form-input form-input--password" type="password" name="password" placeholder="Password" required>
    <input class="btn" type="submit" value="Log In">
</form>