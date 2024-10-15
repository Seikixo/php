<?php

    declare(strict_types=1);

    function processInput(int|float|string $input){
        return match(true){
            is_int($input) => "Integer: " . ($input * 2),
            is_float($input) => "Float: " . round($input, 2),
            is_string($input) => "String: " . strtoupper($input),
            default => "Unknown Type"
        };
    }

    $inputs = [42, 3.3, "World", "2", 7, 7.9, "Hello"];

    foreach($inputs as $input){
        echo processInput($input) . "\n";
    }
?>