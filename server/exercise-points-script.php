<?php

function exercise_status($points_param){
    if($_SERVER["REQUEST_METHOD"] == "POST") {

        $points = 0;

        // increases user points with 1
        if(trim($_POST['status-button'] == "Yes")){

            $sql = "SELECT points FROM users_info WHERE username = ?";

            if($stmt = $db->prepare($sql)) {
                $stmt->bind_param("s", $_SESSION['username']);

                if($stmt->execute()){
                    $stmt->store_result();

                    if($stmt->num_rows == 1) {
                        $stmt->bind_result($points_param);
                        if($stmt->fetch()){
                            $points = $points_param + 1;
                        }
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                $stmt->close();
            }

            $sql = "UPDATE users_info SET points = ? WHERE username = ?";
            if($stmt = $db->prepare($sql)){
                $stmt->bind_param("ss", $points, $_SESSION['username']);
                $stmt->execute();
            }
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // decreases user points with 1
        if(trim($_POST['status-button'] == "No")){

            $sql = "SELECT points FROM users_info WHERE username = ?";

            if($stmt = $db->prepare($sql)) {
                $stmt->bind_param("s", $_SESSION['username']);

                if($stmt->execute()){
                    $stmt->store_result();

                    if($stmt->num_rows == 1) {
                        $stmt->bind_result($points_param);
                        if($stmt->fetch()){
                            $points = $points_param - 1;
                        }
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                $stmt->close();
            }

            $sql = "UPDATE users_info SET points = ? WHERE username = ?";
            if($stmt = $db->prepare($sql)){
                $stmt->bind_param("ss", $points, $_SESSION['username']);
                $stmt->execute();
            }
            else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
    }
}