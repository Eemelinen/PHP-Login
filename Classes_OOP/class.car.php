<?php

    class Car {

        // properties
        var $engines = 1;
        var $wheels = 4;
        var $doors = 10;
        var $brakes = 1;

        // Static. Can be used anywhere in program by specifying containing class.
        static $inStock = false;

        // Public property data is accessible to all classes.
        public $regNumber = "333-333";

        // Protected property is only accessible to this class and subclasses.
        protected $owner = "Emilio Suraki";

        // Private property is only accessible to this class.
        private $owner_SSN = "12.03.12-544A";

        // Constructor. Runs whenever a new instance is initiated.
        function __construct(){
            echo $this->wheels = 10 . "<br>";
        }

        // === ++++ === //

        // Methods (= functions outside classes.)
        function startEngine() {
            echo "HRMMH! The car is started. <br>";
        }

        function stopEngine()
        {
            echo "Grrph... The car engine stops. <br>";
        }

        function moveWheels() {
            echo "Squeek squeek. The wheels start moving. <br>";
        }

        // Change property  value.
        function addExtraEngine() {
            $this->engines = 2;
            echo "Extra engine added.";
        }

        // Static method
        static function carCustomer($name){
            $className = get_class();
            echo "Customer $name wants to buy a $className.";
        }
    }

    // Inheritance
    class Truck extends Car {
        
        // var wheels has been overwritten from class car.
        var $wheels = 16;

        // Now truck specific method has been added.
        function loadCargo() {
            echo "Truck is loaded with cargo.";
        }

        function __construct() {
            echo "<br>" . $this->owner . "<br";
        }

        // Static Method
        static function carCustomer($name){
            $className = get_class();
            echo "Customer $name wants to buy a $className.";
        }

    } 

    // $bmw = new Car();

    // $bmw->moveWheels();

    // if(class_exists("car")) {
    //     echo "Class car exists";
    // } else {
    //     echo "no car";
    // }

    // function methodTest() {
    //     if (method_exists("car", "startTheCar")) {
    //         echo "Start the car -method exists in class car.";
    //     } else {
    //         echo "No start the car -method exists.";
    //     }
    // }

?>