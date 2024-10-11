<?php

    $name = "Noor";
    $pizza = 8;
    $pizzaAte = 2;
    $pizzaRemaining = $pizza - $pizzaAte; //type coercion
    $hungry = false;

    echo "Hello World\n";
    echo "Welcome " . $name . " to PHP\n";
    echo "This is the remaining pizza " . $pizzaRemaining . "\n"; 
    echo "Still hungry? ";
    echo $hungry ? "Yes" : "No"; //ternary operator
?>