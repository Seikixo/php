<?php

    $url = "https://example.com/path?key=value&special=@#$%";
    $stringExample = "Hello World!";

    $endcode = urlencode($url); // urlencode() you can safely pass strings that contains special characters
    $decode = urldecode($endcode); // urldecode() you can safely pass convert it back

    var_dump($endcode);
    var_dump($decode);

    $base64encode = base64_encode($stringExample); //Base64 encoding converts binary data into a Base64-encoded string.
    $base64decode = base64_decode($base64encode); //Base64 decoding converts a Base64-encoded string back into its original binary data.

    var_dump($base64encode);
    var_dump($base64decode);

?>