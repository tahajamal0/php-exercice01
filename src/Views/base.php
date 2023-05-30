<?php
    session_start();
    echo "<link rel='stylesheet' href='../../static/styles/style.css'>";
?>

<nav class="nav-container">
    <?php if (!isset($_SESSION["logged_user"])) : ?>
        <a class="nav-link" href="signin.php">Log In</a>
        <a class="btn" href="signup.php">Sign Up</a>
    <?php else : ?>
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/src/Views/public.php">Public</a>
        <a class="nav-link" href="/src/Views/admin.php">Admin</a>
        <a class="btn" href="/src/Views/logout.php">Logout</a>
    <?php endif; ?>
</nav>