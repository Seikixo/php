<?php

    /*class Person{

        public function __construct(public string $name, public int $age){ //The constructor method (__construct) is a special method that gets called automatically when an object of the class is instantiated.
        }

        public function introduce(): string{ //method
            return "Hi my name is {$this->name} and my age is {$this->age} years old";
        }
    }*/

    class Client{
        private $name;

        public function setName($name){
            $this->name = $name;
        }

        public function getName(){
            return $this->name;
        }
    }

    $employee = new Client();
    $employee->setName("Vaughn");
    echo($employee->getName());