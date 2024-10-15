<?php

    $users = [
        ['id' => 1, 'name' => "Seikizo", 'role' => "admin"],
        ['id' => 2, 'name' => "Fred", 'role' => "user"],
        ['id' => 3, 'name' => "Jean", 'role' => "user"],
    ];

    function createFilter($key, $value){
        return fn ($item) => $item[$key] === $value;
    }

    $isAdmin = createFilter('role', 'admin');

    $admins = array_filter($users, $isAdmin);

    var_dump($admins);

?>