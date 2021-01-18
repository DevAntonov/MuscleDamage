<?php

// Define variables and initialize with empty values
$password = $new_password = $confirm_new_password = "";
$password_err = $new_password_err = $confirm_new_password_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){


    // Validate new password
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Please enter a password.";
    } elseif(strlen(trim($_POST["new_password"])) < 8){
        $new_password_err = "Password must have at least 8 characters.";
    }  else{
        $new_password = trim($_POST["new_password"]);
    }

    // Validate confirm new password
    if(empty(trim($_POST["confirm_new_password"]))){
        $confirm_new_password_err = "Please confirm password.";
    } else{
        $confirm_new_password = trim($_POST["confirm_new_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_new_password)){
            $confirm_new_password_err = "Password did not match.";
        }
    }

    // Validate old password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your old password.";
    } else{
        $password = trim($_POST['password']);
        $sql = "SELECT password FROM users_info WHERE username = ?";

        if($stmt = $db->prepare($sql)){
            $stmt->bind_param("s", $_SESSION['username']);

            if($stmt->execute()){
                $stmt->store_result();

                if($stmt->num_rows == 1) {
                    $stmt->bind_result($hashed_password);
                    if($stmt->fetch()){
                        if(!(password_verify($password, $hashed_password))){
                            $password_err = "Wrong password";
                        }
                    }
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            $stmt->close();
        }
    }

    // Check input errors before updating database
    if(empty($email_err) && empty($username_err) && empty($password_err) && empty($confirm_password_err)){

        // Prepare an select statement
        $sql = "UPDATE users_info SET password = ? WHERE id= ?";
        if($stmt = $db->prepare($sql)){
            $stmt->bind_param("ss", $password_param, $id_param);
            $password_param = password_hash($new_password, PASSWORD_DEFAULT);
            $id_param = $_SESSION['id'];
            $stmt->execute();
        }
        else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close connection
    $db->close();
}