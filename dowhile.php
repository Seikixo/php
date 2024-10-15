<?php

    do{
        $diceRoll = rand(1, 6);
        echo "You rolled $diceRoll\n";
    
        if(6 == $diceRoll){
            echo "Congrats you won";
        }
    
        echo "Roll again? (y/n)";
        $rollAgain = trim(fgets(STDIN));
    }
    while($rollAgain == 'y');


?>