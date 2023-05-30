<?php
    session_start();
    echo "<link rel='stylesheet' href='static/styles/style.css'>";
?>

<nav class="nav-container">
    <?php if (!isset($_SESSION["logged_user"])) : ?>
        <a class="nav-link" href="signin.php">Log In</a>
        <a class="btn" href="signup.php">Sign Up</a>
    <?php else : ?>
        <a class="nav-link" href="index.php">Home</a>
        <a class="nav-link" href="public.php">Public</a>
        <a class="nav-link" href="admin.php">Admin</a>
        <a class="btn" href="logout.php">Logout</a>
    <?php endif; ?>
</nav>