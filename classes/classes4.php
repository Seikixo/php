<?php

    //Singleton Software Design Pattern

    class Connection{
        private static $instance = null;
        private function __construct(){}

        public static function singleton(){
            if(null === static::$instance){
                static::$instance =  new Connection();
            }

            return static::$instance;
            
        }
    }

    $connection = Connection::singleton();
