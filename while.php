<?php
    $password = "magic";
    $attempts = 0;
    $maxAttempt = 5;

    while($attempts < $maxAttempt){
        echo "Guess the password: ";
        $guess = trim(fgets(STDIN));
        $attempts++;

        if($guess == $password){
            echo "You have a new skill\n";
            break;
        }
        elseif($attempts == $maxAttempt){
            echo "You have a new curse\n";
        }
        else{
            echo "You have attempts " . ($maxAttempt - $attempts) . " left try again\n";
        }

    }
?>