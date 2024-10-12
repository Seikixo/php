<?php

declare(strict_types=1);

    $number = [1, 2, 3];
    $addedMembers = ["KDot", "Lil Uzi"];

    function sum(int ...$numbers): int{ //...$variadic accepts unlimited arguments
        $sum = 0;
        var_dump($numbers);
        foreach($numbers as $number){
            $sum += $number;
        }

        return $sum;
    }
    var_dump(sum(5, 10, 15, 20, 25));
    var_dump(sum(...$number)); //unpacking array into arguments;

    function introduceTeam(string $teamName, string ...$members): void{ //required and variadic //void for return nothing
        echo "Team $teamName \n";
        echo "Members " . implode(", ", $members) . "\n"; //The implode() function in PHP is used to join together an array of strings into a single string.
        var_dump($members);
    }
    introduceTeam("Izboogie", "Lil Wayne", "Breezy");

    introduceTeam("Jiggalo", "Lil Wayne", "Breezy", ...$addedMembers);

   

    

?>