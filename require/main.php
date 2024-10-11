<?php
    //include makes only warning even if the file doesn't exist
    //require makes stop if the file doesn't exist
    require 'config.php';

    server($dbHost, $dbPort);

?>