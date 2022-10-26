<?php
    $edad = $_GET["edad"];
    $sexo = $_GET["sexo"];

    if (($edad>63)&&($sexo=="m")){
        echo "Tiene la edad adecuada para jubilarse";
    }else{
    
    if
        (($edad>54)&&($sexo=="f")){
            echo "Tiene la edad adecuada para jubilarse";
        }else{
            echo "Usted no tiene la edad adecuada para jubilarse";
        }
    
        
    }

?>