<?php
    $volantes = $_GET["volan"];
    $posters = $_GET["post"];
    $tarjetas = $_GET["tar"];
    $comprav = $volantes * 2000;
    $comprap = $posters * 5000;
    $comprat = $tarjetas * 500;
    $pagottal =  $comprav + $comprap +  $comprat;

    echo "Compra de ".$volantes. " volantes";
    echo " de ".$posters. " posters";
    echo " y de ".$tarjetas. " tarjeta". " /";
    echo "<br>";
    echo " Total a pagar de: ". $pagottal. "$";

?>