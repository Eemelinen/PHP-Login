<?php
        if(file_exists("example.txt")) {
            unlink("example.txt");
            echo "example.txt deleted.";
        } else {
            echo "example.txt doesn't exist.";
        }
?>