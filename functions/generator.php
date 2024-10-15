<?php

    function countDown(int $start): Generator{ //Great for working with data sets and effecient with memory
        for($i = $start; $i > 0; $i--){
            echo "Generating number...\n";
            yield random_int(1, 100);
        }

    }
    foreach(countDown(5) as $numbers){
        echo "Echoing number...\n";
        echo "$numbers \n";
    }
?>