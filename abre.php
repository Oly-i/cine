<?php
    $conexion= new mysqli("localhost", "root", "", "cine");
    if($conexion){
    echo "La gestion fue exitosa";
    }else{
        echo "Algo salio mal";
    }
?>
