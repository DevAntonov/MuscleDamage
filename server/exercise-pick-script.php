<?php

$exercise = "Click the button to pick exercise";

if($_SERVER["REQUEST_METHOD"] == "GET") {

// Creating an multidimensional array with
    $exercises = array(
        "Push-ups" => array("10 reps", "20 reps", "30 reps", "40 reps", "50 reps"),
        "Squats" => array("20 reps", "40 reps", "60 reps", "80 reps", "100 reps"),
        "Plank" => array("1 min", "2 min", "3 min", "4 min", "5 min")
    );

    $picked_exercise_temp = array_keys($exercises);
    $picked_exercise = array_rand($picked_exercise_temp);
    $picked_exercise = $picked_exercise_temp[$picked_exercise];
    $picked_reps = array_rand($exercises[$picked_exercise]);
    $picked_reps = $exercises[$picked_exercise][$picked_reps];
    $result_array = array($picked_exercise, $picked_reps);

    $exercise = $result_array[0]." - ".$result_array[1];


}

