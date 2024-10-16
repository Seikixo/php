<?php

    //anonymous function needs to be assign to a variable or pass as a parameter to a function
    $greet = function($name){
        return "Hello, $name \n";
    };

    echo $greet("Seikizo");

    $numbers = [1, 2, 3];
    $squared = array_map(function($n){
        return $n * $n;
    }, $numbers);

    var_dump($numbers, $squared);


    $message = "Bye";
    $goodbye = function($name) use ($message){ // use access variables outisde of anon func 
        $message = $message . "!"; //you can change the value within anon func making a copy
        return "$message, $name \n";
    };

    echo $goodbye("Seikizo");


?>