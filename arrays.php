<?php

    $simpleArrays = [1, 2, 3, 4, 5];
    $associativeArray = [
        'name' => 'John',
        'age' => 23,
        'city' => 'Davao'
    ];
    $matrix = [
        [1, 2, 3],
        [4, 5, 6]
    ];
    $city = ['Tagum', 'Davao', 'Mati'];
    $numbers = range(1, 5);

    echo $simpleArrays[0];
    echo $associativeArray['name'];
    echo $matrix[1][0];
    sort($city); //ascending
    var_dump ($city);
    rsort($city); //descending
    var_dump ($city);

    var_dump ($associativeArray);
    asort($associativeArray);
    var_dump ($associativeArray);
    ksort($associativeArray);
    var_dump ($associativeArray);


    $squared = array_map(fn($n) => $n ** 2, $numbers); // array came 2nd
    $even = array_filter($numbers, fn($n) => $n % 2 == 1); // array came 1st
    $sum = array_reduce($numbers, fn($carry, $n) => $carry + $n, 0); // array reduce into 1 single value; // 1st argument is array 2nd argument callback 3rd argument is initial value
    var_dump($squared);
    var_dump($even);
    var_dump($sum);

    $set1 = [1, 2, 3, 4, 5, 6];
    $set2 = [3, 4, 5, 6, 7, 8];

    $intersect = array_intersect($set1, $set2); // parameters position can be interchangable and returns the same values
    $difference = array_diff($set1, $set2); // parameters position can be interchangable but returns the values from the 1st parameters that didn't exist in the 2nd parameter

    $keys = array_keys($associativeArray);
    $values = array_values($associativeArray);

    $capitalizeKeys = array_map(
        fn($key) => ucfirst($key), array_keys($associativeArray)
    );

    var_dump($keys, $values, $capitalizeKeys);

    $keyCheck = array_key_exists('city', $associativeArray);
    $valueCheck = in_array('Davao', $associativeArray);

    var_dump($keyCheck, $valueCheck);

