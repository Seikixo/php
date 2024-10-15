<?php

    class Person{

        public function __construct(public string $name, public int $age){ //The constructor method (__construct) is a special method that gets called automatically when an object of the class is instantiated.
        }

        public function introduce(): string{ //method
            return "Hi my name is {$this->name} and my age is {$this->age} years old";
        }
    }

    $person = new Person("Seikizo", 23); //A new object Person is created using the new keyword.
    echo $person->introduce();