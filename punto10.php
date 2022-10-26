<?php
    $valorp = $_GET["val"];
    $desc = $valorp * 0.2;

    if($valorp >= 20000){
        $total = $valorp - $desc;
        echo "Su producto tiene un valor final de: ". $total;

    }else{
        echo "Su producto no tiene descuento";
    }

?>