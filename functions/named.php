<?php

    function greet(string $name, string $greeting = "Hello", bool $shout = false): string{
        $message = "$greeting, $name!";
        return $shout ? strtoupper($message): $message;
    }

    echo greet("Alice", "Hey", true) . "\n"; // follows the order of arguments
    echo greet(name: "Seikizo", shout: false); // with name argument you can skip the order of arguments

?>