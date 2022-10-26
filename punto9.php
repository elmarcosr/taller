<?php
     $nombre = $_GET ["nom"];
     $asig = $_GET ["asig"];
    $examen1 = $_GET["exa1"];
    $examen2 = $_GET["exa2"];
    $examen3 = $_GET["exa3"]; 

    $porcentajexamen1 = $examen1 * 0.3;
    $porcentajexamen2 = $examen2 * 0.3;
    $porcentajexamen3 = $examen3 * 0.4;
    $resultado = $porcentajexamen1 + $porcentajexamen2 + $porcentajexamen3;


    if($resultado >= 4){
        echo "Usted a aprobado la asiganatura con una nota de: ". $resultado;

    }else {
        echo "Usted no a aprobado la asiganatura con una nota de: ". $resultado;
    }
    


?>
