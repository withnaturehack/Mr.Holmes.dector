<?php
    /*ORIGINAL karzo: karzo (hackwithnature)
    AUTHOR: karzo (hackwithnature)
    Copyright (C) 2025-26 hackwithnature <withnaturehack@gmail.com>
    License: GNU General Public License v3.0*/

    $filename = "../Graphs/Temp.txt";
    $reader = fopen("../Graphs/TempEncode.txt","r");
    $name = fgets($reader);
    fclose($reader);
    echo move_uploaded_file(
        $_FILES["upFile"]["tmp_name"],
        $name
    )? "OK":"ERROR";
?> 
