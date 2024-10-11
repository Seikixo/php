<?php

    $isStudent = 2;
    var_dump($isStudent, $isStudent == true, $isStudent < 5);
    var_dump($isStudent === true); //strict eqaulity

    $scores = [10, "20", 10.5];

    $total = + $scores[1] + $scores[2];
    var_dump($scores, $total);

    echo "Total score: $total";
?>