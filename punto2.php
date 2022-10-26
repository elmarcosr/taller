<?php

    $nombre = $_GET ["nom"];
    $asig = $_GET ["asig"];
    $nota1 =$_GET["nota1"];
    $nota2 =$_GET["nota2"];
    $nota3 =$_GET["nota3"];
    $promedio = ($nota1 + $nota2 + $nota3)/3;
    echo "Estudiante: ".$nombre;
    echo "<br>";
    echo " Asignatura: ".$asig;
    echo "<br>";
    echo "Promedio: ".$promedio;




?>