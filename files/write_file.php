<?php

// On Linux and Mac servers remember to allow write permissions.

    // Fetch website
    // $homepage = file_get_contents('http://www.hs.fi/');
    // echo $homepage;

    $file = "example.txt";

    $handle = fopen($file, "w");

    fwrite($handle, "You could also write json-output here.");

    fclose($handle);

    if(file_exists("example.txt")) {
        echo "File example.txt created.";
    } else {
        echo "Can't delete since example.txt doesn't exist.";
    }

?>
