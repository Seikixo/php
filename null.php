<?php
    declare(strict_types=1);
    $abc = null;
    $db = $abc ?? "default"; // ?? assigns a default value 
    var_dump(
        null == null,
        null == false,
        null == 0,
        null == '',
        null == [],
        $abc,
        isset($abc),
        is_null($abc),
        $db,
        empty([]) // checks all null cases
    );

    var_dump(
        array_filter([1, null, "", [], 3]) // removes all null cases
    );

?>