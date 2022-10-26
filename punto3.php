<?php
    $nombre = $_GET ["nom"];
    $ganados = $_GET ["parg"];
    $empatados = $_GET ["pare"];
    $perdidos = $_GET ["parp"];
    $pg = $ganados * 3;
    $pe = $empatados * 1;
    $pp = $ganados * 0;
    $PunTotal = $pg + $pe + $pp;

    echo $nombre. " Puntos totales es de:  ". $PunTotal;


?>