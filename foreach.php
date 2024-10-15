<?php

    $basket = [
        "Apple" => 5,
        "Mango" => 10
    ];

    $total = 0;

    foreach($basket as $item => $quantity){
        echo "$item: $quantity \n";
        echo "Total: " . ($total += $quantity);
    }

?>