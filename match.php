<?php

    $status = 404;

    $message = match ($status) { //uses strict comparison
        200, 300 => 'Success',
        400, 404, 500 => 'Error',
        default => 'Unknown'
    };

    echo "Response: $message"  ;

?>