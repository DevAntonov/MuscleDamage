<?php
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpassword = "";
    $dbname = "muscle_damage_db";

    $db = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

    if($db->connect_error) {
        die("Connection failed: ".$db->connect_error);
    }
