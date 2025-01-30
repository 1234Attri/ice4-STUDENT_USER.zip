<?php
    $current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="=UTF-8">
    <meta name="viewport" content ="width=device-width,initial-scale=1.0">
    <title>My Php Page</title>
    <link rel="stylesheet" href="css/style.css">
 
</head>
<header>
    <nav>
        <ul>
            <li class="<?= ($current_page == 'index.php') ? 'active': ''; ?>"><a href="index.php">Home</a></li>
            <li class="<?= ($current_page == 'about.php') ? 'active': ''; ?>"><a href="about.php">About US</a></li>
            <li class="<?= ($current_page == 'services.php') ? 'active': ''; ?>"><a href="services.php">Services</a></li>
        </ul>
    </nav>
</header>