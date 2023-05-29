<?php

    $Host = 'localhost';
    $Name = 'root';
    $Pass = '';
    $DB   = 'hw';

    $Connection = mysqli_connect($Host, $Name, $Pass, $DB);

    if(!$Connection){
        echo "DataBase connection Failed";
    }



?>