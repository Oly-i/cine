<?php
    $conexion= new mysqli("localhost", "root", "", "cines");
    if($conexion){
    echo "La gestion fue exitosa";
    }else{
        echo "Algo salio mal";
    }
?>