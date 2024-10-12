<?php

    $numbers = [1,2,3,4,5];
    $multiplier = 2;

    $squared =  array_map(
        fn ($n) => $n * $multiplier,
        $numbers
    );

    var_dump($numbers, $squared);
?>