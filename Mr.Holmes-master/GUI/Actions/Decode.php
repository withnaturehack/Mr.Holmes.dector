<?php
    /*ORIGINAL karzo: karzo (hackwithnature)
    AUTHOR: karzo (hackwithnature)
    Copyright 2025-26 hackwithnature <withnaturehack@gmail.com>
    License: GNU General Public License v3.0*/ 

    function Decode($content){
        $converted = base64_decode($content);
        $String = utf8_encode($converted);
        return $String;
    }
?>