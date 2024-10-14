<?php

    $csv = "avocado, banana, mango";
    $fruits1 = explode(",", $csv); // explode can convert strings to array which use , as separator
    var_dump($fruits1);

    $fruits2 = implode(",", $fruits1); // implode can convert array to strings which use , as separator
    var_dump($fruits2);

?>