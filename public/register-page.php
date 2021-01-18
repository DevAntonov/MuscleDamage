<?php
/*
 * define constant with path to project directory using
 * combination of dirname(__FILE__) and subsequent calls
 * to itself. Then, attach this variable (that contains the path)
 *  to your included files with their parent folders.
 */
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/server/db_connection.php');
require_once(__ROOT__.'/server/register-form-validation.php')
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MuscleDamage - Register page</title>
        <link rel="stylesheet" href="styles/register-style.css" type="text/css">
        <link rel="stylesheet" href="styles/media-queries.css" type="text/css">
    </head>

    <body>
        <form class="log-reg-forms" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1>Sign Up</h1>
            <div class="input">
                <input placeholder="Email" type="text" name="email" value="<?php echo $email; ?>">
                <span class="error-block"><?php echo $email_err; ?></span>
                <input placeholder="Username" type="text" name="username" value="<?php echo $username; ?>">
                <span class="error-block"><?php echo $username_err; ?></span>
                <input placeholder="Password" type="password" name="password" value="<?php echo $password; ?>">
                <span class="error-block"><?php echo $password_err; ?></span>
                <input placeholder="Confirm Password" type="password" name="confirm_password" value="<?php echo $confirm_password; ?>">
                <span class="error-block"><?php echo $confirm_password_err; ?></span>
                <input type="submit" class="btn" value="Submit">
                <p>Already have an account? <a href="login-page.php">Login here</a>.</p>
            </div>
        </form>
    </body>

</html>
