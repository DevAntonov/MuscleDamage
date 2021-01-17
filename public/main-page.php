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
        <link rel="stylesheet" href="styles/main-style.css" type="text/css">
        <link rel="stylesheet" href="styles/media-queries.css" type="text/css">
    </head>
    <body>
        <header>
            <h1 class="main-h1">MuscleDamage</h1>
            <nav>
                <ul class="navlinks-main">
                    <li><a href="settings-page.php">Settings</a></li>
                    <li><a href="logout-script.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <section class="exercise">
                <div class="exercise-pick">

                </div>
                <div class="exercise-status">

                </div>
            </section>
            <aside class="exercise-history">
            </aside>
            <aside class="exercise-stats">

            </aside>
        </main>
        <footer>
            2021 - All rights reserved.
        </footer>
    </body>
</html>