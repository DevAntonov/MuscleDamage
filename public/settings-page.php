<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login-page.php");
    exit;
}

/*
 * define constant with path to project directory using
 * combination of dirname(__FILE__) and subsequent calls
 * to itself. Then, attach this variable (that contains the path)
 *  to your included files with their parent folders.
 */
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/server/db_connection.php');
require_once(__ROOT__.'/server/settings-form-validation.php')
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
                <form class="settings-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <h1 class="h1-pass-change">Change your password</h1>
                    <div class="input-pass-change">
                        <input placeholder="Enter new password" type="password" name="new_password" value="<?php echo $new_password; ?>">
                        <span class="error-block"><?php echo $new_password_err; ?></span>
                        <input placeholder="Confirm new password" type="password" name="confirm_new_password" value="<?php echo $confirm_new_password; ?>">
                        <span class="error-block"><?php echo $confirm_new_password_err; ?></span>
                        <input placeholder="Enter your old password" type="password" name="password" value="<?php echo $password; ?>">
                        <span class="error-block"><?php echo $password_err; ?></span>
                        <input type="submit" class="btn" value="Change password">
                    </div>
                </form>
            </section>
        </main>
        <footer>
            2021 - All rights reserved.
        </footer>
    </body>
</html>
