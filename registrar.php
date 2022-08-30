<?php

include("db.php");

if (isset($_POST['save_task'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $ciudad = $_POST['ciudad'];
    $profecion = $_POST['profecion'];
   /* echo $nombre;
    echo $apellido;
    echo $ciudad;
    echo $profecion;*/

    $query = "INSERT INTO registros(nombre, apellido, ciudad, profecion) VALUES ('$nombre', '$apellido', '$ciudad', '$profecion')";
    $resultado = mysqli_query($conn, $query);
    if(!$resultado){
        die("query failed");

    }


    
}


?>