<?php

    $superhero = "Superman";

    function revealIndentity(){
        global $superhero; // can access variable outside function
        $message = "real name is Clark Kent \n";
        echo "$superhero $message";
    }

    function countVisitors(){
        static $visitorCount = 0; //preserve the state of a variable defined in the function
        $visitorCount++;
        echo "Visitor #$visitorCount has arrived! \n";
    }


    revealIndentity();
    countVisitors();
    countVisitors();
    countVisitors();
?>