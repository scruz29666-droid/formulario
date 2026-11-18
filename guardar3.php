<?php

$conectar = mysqli_connect('localhost','root','','ejemplos');

if(!$conectar){
    echo "No se pudo conectar con el servidor";
}

if($_SERVER["REQUEST_METHOD"]=="POST"){

    $Mascota = $_POST['mascota'];
    $Raza = $_POST['raza'];
    $Descripcion = $_POST['descripcion'];


    $sql = "INSERT INTO datoss2
    (Mascota, raza, descripcion)

    VALUES

    ('$Mascota','$Raza','$Descripcion')";

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