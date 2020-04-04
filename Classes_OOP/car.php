<!DOCTYPE html>

<?php include "class.car.php" ?>

<?php
    $bmw = new Car();
    $sisu = new Truck();
?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head> 

<body>

    <?php

        // methodTest();

        $bmw->startEngine();

        $bmw->moveWheels();

        echo "doors: " . $bmw->doors;
        
        echo "<br>";
        
        echo "engines: " . $bmw->engines;

        echo "<br>";

        $bmw->stopEngine();

        $bmw->addExtraEngine();

        echo "<br>";

        echo "engines: " . $bmw->engines;
        
        echo "<br>";

        echo "Sisu truck's number of wheels: " . $sisu->wheels;

        echo "<br>";
        
        $sisu->loadCargo();

        echo "<br>";

        if ($sisu::$inStock) {
            echo "Car in stock";
        } else {
            echo "Car out of stock.";
        }

        echo "<br>";

        $sisu::carCustomer("Janne Ilonen");

    ?>

</body>

</html>