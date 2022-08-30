<?php
    include("db.php");

    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "SELECT * FROM registros WHERE id = $id";
        $resultado = mysqli_query($conn, $query);
        if (mysqli_num_rows($resultado) == 1) {
            $row = mysqli_fetch_array($resultado);
            $nom = $row['nombre'];
            $ape = $row['apellido'];
            $ciu = $row['ciudad'];
            $pro = $row['profecion'];
        }


    }

    if (isset($_POST['actualizar'])) {
        $id = $_GET['id'];
        $nombA = $_POST['nombre'];
        $apeA = $_POST['apellido'];
        $ciuA = $_POST['ciudad'];
        $proA = $_POST['profecion'];

        $query = "UPDATE registros set nombre = '$nombA', apellido = '$apeA', ciudad = '$ciuA', profecion = '$proA' WHERE id =$id ";
        mysqli_query($conn, $query);
        header("Location: interfax.php");
    }

?>    
    <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="widh=device-widt, inditial scale=1.0">
		<link rel="stylesheet" type="text/css" href="stilecrud.css">
	<title>crud3 </title>
	<script src='archi.js'></script>
</head>

<body>

<div class="todo">    
    <h4>CRUD </h4>


<form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST"  class ="formulario">

   <section class="form-register" >
	<h4>registro</h4>
	<input class="controls" type="text" name="nombre" value="<?php echo $nom ?>" placeholder="actualisar nombre" required="" >
	<input class="controls" type="text" name="apellido" value="<?php echo $ape ?>" placeholder="actualisar apellido" required="">
    <input class="controls" type="text" name="ciudad" value="<?php echo $ciu ?>" placeholder="actualisar ciudad" required="">
	<input class="controls" type="text" name="profecion" value="<?php echo $pro ?>" placeholder="actualisar profecion"required="" >
	<input class="botons" type="submit" name="actualizar"> </input><br>
	
   </section>
</form>
</body>
</html>



