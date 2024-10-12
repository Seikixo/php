<?php

    $person = "John";
    $client = &$person; // using & will make a reference and can change the real value

    var_dump($person, $client);

    $client = "Vincenzo";

    var_dump($person, $client);

    $person = "Eddy";

    var_dump($person, $client);
    
?>