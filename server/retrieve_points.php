<?php

$points = 0;

$sql = "SELECT points FROM users_info WHERE username = ?";

if($stmt = $db->prepare($sql)) {
    $stmt->bind_param("s", $_SESSION['username']);

    if($stmt->execute()){
        $stmt->store_result();

        if($stmt->num_rows == 1) {
            $stmt->bind_result($points_param);
            if($stmt->fetch()){
                $points = $points_param;
            }
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }

    $stmt->close();
}