<?php
    $nombre = $_GET["nom"];
    $asignatura = $_GET["asig"];
    $notaf = $_GET["nt"];

    if($notaf< 7){
        echo $nombre." en la asignatura ".$asignatura." con la nota: ".$notaf. " Reprobado";

    }else{
        echo $nombre." en la asignatura ".$asignatura." con la nota: ".$notaf. " Aprobado";
    }


?>