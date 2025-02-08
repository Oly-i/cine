<?php
    include("abre.php");

    $ticket     =$_POST['ticket'];
    $pelicula   =$_POST['pelicula'];

    $consulta = "INSERT INTO taquilla(ticket, pelicula) VALUES ('$ticket', '$pelicula')";

    if($conexion->query($consulta) === TRUE){
        header("Location: index.php");
    }else{
        echo "Error: " .$consulta."<br>". $conexion->error;
    }
$conexion->close();
?>