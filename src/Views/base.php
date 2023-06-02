<?php
    session_start();
    require $_SERVER["DOCUMENT_ROOT"] . '/autoloader.php';
    echo "<link rel='stylesheet' href='/static/styles/style.css'>";
?>

<nav class="nav-container">
    <?php if (!isset($_SESSION["logged_user"])) : ?>
        <a class="nav-link" href="/signin">Log In</a>
        <a class="btn" href="/signup">Sign Up</a>
    <?php else : ?>
        <a class="nav-link" href="/">Home</a>
        <a class="nav-link" href="/public">Public</a>
        <a class="nav-link" href="/admin">Admin</a>
        <a class="btn" href="/src/Views/logout.php">Logout</a>
    <?php endif; ?>
</nav>