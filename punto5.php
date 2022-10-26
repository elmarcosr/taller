<?php

    $edad1 = $_GET['edad1'];
    $edad2 = $_GET['edad2'];

    if($edad1==$edad2){

        echo "Las edades de los hermanos es igual (gemelos)";

    }elseif($edad1>$edad2){
        echo $edad1." es mayor que ".$edad2;

    }else{
        echo $edad1. " es menor que ".$edad2;
    }


?>