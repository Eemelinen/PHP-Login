<?php

    // On Linux and Mac servers remember to allow write permissions.

    $file = "example.txt";

    $handle = fopen($file, "r");

    echo $content = fread($handle, 10);
    
    // fread($handle, 10);
    
    // fread(filesize($file));

    // Don't leave file open.
    fclose($handle);



?>
