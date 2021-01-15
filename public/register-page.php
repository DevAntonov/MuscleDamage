<?php
/*
 * define constant with path to project directory using
 * combination of dirname(__FILE__) and subsequent calls
 * to itself. Then, attach this variable (that contains the path)
 *  to your included files with their parent folders.
 */
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/server/db_connection.php');
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MuscleDamage - Log in</title>
    </head>

    <body>
        <div>
            <form>

            </form>
        </div>
    </body>

</html>
