<?php

    /*class Person{

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


    }*/

        //Polymorph
    /*$people = [
        new Employee("Vincenzo", 21, "CEO"),
        new Person("Adam", 25)
    ];

    function introduce(Person $person){
        echo $person->introduce();
    }

    foreach($people as $person){
        introduce($person);
    }*/

    class Car{
        private $name;

        public function setModel($name){
           $this->name = $name;

           
        }

        public function getModel(){
            return("{$this->name}is driving");
        }

    }

    class Toyota extends Car{
        public function ratings(){
            return "8/10";
        }
    }

    $car = new Toyota();
    $car->setModel('Hilux');
    var_dump($car->getModel(),  $car->ratings());


