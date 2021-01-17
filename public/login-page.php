<?php
// Initialize the session
session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
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
require_once(__ROOT__.'/server/login-form-validation.php')
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MuscleDamage - Login Page</title>
        <link rel="stylesheet" href="styles/login-style.css">
    </head>

    <body>
        <div>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <h1>Login</h1>
                <div class="input">
                    <input placeholder="Enter username" type="text" name="username" value="<?php echo $username; ?>">
                    <span class="help-block"><?php echo $username_err; ?></span>
                    <input placeholder="Enter password" type="password" name="password" value="<?php echo $password; ?>">
                    <span class="help-block"><?php echo $password_err; ?></span>
                    <input type="submit" class="btn" value="Login">
                    <p>Don't have an account? <a href="register-page.php">Sign up now</a>.</p>
                </div>

            </form>
        </div>
    </body>

</html>
