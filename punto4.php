<?php
     $horas = $_GET ["hrs"];
     $valorh = $_GET ["valh"];

     $sueldo = $horas * $valorh;

     echo "El salario de este mes es: ". $sueldo. "$";

?>