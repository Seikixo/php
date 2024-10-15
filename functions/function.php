<?php

    function greet($name){
        return"Hello, $name! \n";
    }

    echo greet("Vaughn");

    function greetWithTime($name, $time = "day"){
        return "Good $time, $name\n";
    }

    echo greetWithTime("Shine");
    echo greetWithTime("Vans", "evening");

?>