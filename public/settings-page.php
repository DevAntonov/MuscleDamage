<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-page.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MuscleDamage</title>
        <link rel="stylesheet" href="styles/settings-style.css" type="text/css">
        <link rel="stylesheet" href="styles/media-queries.css" type="text/css">
    </head>
    <body>
        <header>
            <h1 class="settings-h1">MuscleDamage</h1>
            <nav>
                <ul class="navlinks-settings">
                    <li><a href="main-page.php">Main</a></li>
                    <li><a href="logout-script.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <main class="container">
            <section class="settings">

            </section>
        </main>
        <footer>
            2021 - All rights reserved.
        </footer>
    </body>
</html>
