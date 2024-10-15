<?php

    class Person{

        public function __construct(public string $name, public int $age){ //The constructor method (__construct) is a special method that gets called automatically when an object of the class is instantiated.
        }

        public function introduce(): string{ //method
            return "Hi my name is {$this->name} and my age is {$this->age} years old";
        }
    }

    //Inheritance
    class Employee extends Person{ 

        public function __construct(public string $name, public int $age, public string $position){ //The constructor method (__construct) is a special method that gets called automatically when an object of the class is instantiated.
        }

        public function introduce(): string{
            return parent::introduce() . " I work as {$this->position}";
        }


    }

    $person = new Employee("Seikizo", 23, "Jr. Web Dev"); //A new object Person is created using the new keyword.
    echo $person->introduce();

    //Polymorph
    $people = [
        new Employee("Vincenzo", 21, "CEO"),
        new Person("Adam", 25)
    ];

    function introduce(Person $person){
        echo $person->introduce();
    }

    foreach($people as $person){
        introduce($person);
    }