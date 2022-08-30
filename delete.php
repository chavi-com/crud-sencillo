<?php

    include("db.php");

    if (isset($_GET["id"])) {
        $id = $_GET['id'];
        $query = "DELETE FROM registros WHERE id = $id";
        mysqli_query($conn, $query);
        


        header("location: interfx.php");
    }



?>