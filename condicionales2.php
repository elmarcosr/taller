<?php
    $n1 = $_GET ["num1"];
    $n2 = $_GET ["num2"];
    $n3 = $_GET ["num3"];

    if($n1>$n2){
        if ($n1>$n3){
            echo "El valor ". $n1. " Es mayor que ".$n2. " y " .$n3;  
        }else{
        echo $n3." Es mayor que ". $n1. " y ". $n2; 
        }
    }else{
        echo $n2." Es mayor que ". $n3. " y ". $n1; 
    }


?>