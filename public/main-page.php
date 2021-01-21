<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-page.php");
    exit;
}

define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/server/db_connection.php');
require_once(__ROOT__.'/server/exercise-pick-script.php');
require_once(__ROOT__.'/server/exercise-points-script.php');
require_once(__ROOT__.'/server/retrieve_points.php');
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
            <h1 class="main-h1">MuscleDamage - Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
            <nav>
                <ul class="navlinks-main">
                    <li><a href="settings-page.php">Settings</a></li>
                    <li><a href="logout-script.php">Log out</a></li>
                </ul>
            </nav>
        </header>
        <main class="main">
            <section class="exercise">
                <form class="exercise-pick" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <input type="submit" name="pick-button" value="PICK">
                    <span><?php echo $exercise; ?></span>
                </form>
                <form class="exercise-status" action="exercise_status()" method="get">
                    <span>Is exercise done?</span>
                    <input type="submit" name="status-button" value="Yes">
                    <input type="submit" name="status-button" value="No">
                </form>
            </section>
            <aside class="exercise-history">
            </aside>
            <aside class="exercise-stats">
                <span><?php echo $points; ?></span>
            </aside>
        </main>
        <footer>
            2021 - All rights reserved.
        </footer>
    </body>
</html>