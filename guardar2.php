<?php

$conectar = mysqli_connect('localhost','root','','ejemplos');

if(!$conectar){
    echo "No se pudo conectar con el servidor";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $Veterinaria = $_POST['veterinaria'];
    $Ciudad = $_POST['ciudad'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO datos3
    (Veterinaria,Ciudad,direccion)

    VALUES

    ('$Veterinaria','$Ciudad','$direccion')";

    $ejecutar = mysqli_query($conectar,$sql);

    if(!$ejecutar){

        echo "Hubo algun error";
    }

    else{

        echo "Datos guardados correctamente <br><br>";
        echo "<a href='index2.html'>Volver</a>";
    }
}

?>