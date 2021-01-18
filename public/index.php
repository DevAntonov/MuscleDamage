<?php
// Initialize the session
session_start();

// Check if the user is logged in, if he is, redirect him to main page
if(isset($_SESSION["loggedin"])){
    header("location: main-page.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuscleDamage</title>
    <link rel="stylesheet" href="styles/index-style.css" type="text/css">
    <link rel="stylesheet" href="styles/animation.css" type="text/css">
    <link rel="stylesheet" href="styles/media-queries.css" type="text/css">
</head>

<body>
<header>
    <h1 class="index-h1">MuscleDamage</h1>
    <nav>
        <ul class="navlinks">
            <li><a href="login-page.php">Log in</a></li>
            <li><a href="register-page.php">Sign up</a></li>
        </ul>
    </nav>
</header>
<section>
    <div class="center-text">
        <h2 class="h2_style">Looking for a challenge?</h2>
    </div>
    <div class="about-section">
        <h2 class="h2-about">About MuscleDamage</h2>
        <p class="about">
            Habitasse eu ac hendrerit a consequat iaculis luctus iaculis curabitur.
            Elementum ante volutpat magnis orci mi maecenas lacus posuere porttitor diam diam.
            Per id dis tellus purus class nisl malesuada imperdiet. Tristique sapien orci
            tristique vivamus cras hendrerit purus? Conubia nunc lectus porta nam primis
            pellentesque netus. Eu imperdiet vitae phasellus curae; vulputate sollicitudin magna.
            Sapien tortor vulputate potenti auctor, ipsum ultricies? Ullamcorper vivamus
            mus dolor inceptos eros? Torquent quisque vulputate ullamcorper proin sapien curae;
            libero? Lacus cras, vivamus congue sit lacus fames imperdiet parturient.
        </p>
    </div>
</section>
<footer>2021 - All Rights Reserved.</footer>
</body>

</html>
