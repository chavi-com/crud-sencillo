<?php include("db.php") ?>

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

   
   
 <form action="registrar.php" method="POST"  class ="formulario">

   <section class="form-register" >
	<h4>registro</h4>
	<input class="controls" type="text" name="nombre" placeholder="ingrese su nombre "required="" >
	<input class="controls" type="text" name="apellido" placeholder="ingrese su apellido" required="">
    <input class="controls" type="text" name="ciudad" placeholder="ciudad "required="" >
	<input class="controls" type="text" name="profecion" placeholder="profecion" required=""><br>
	<input class="botons" type="submit" name ="save_task"><br>
	
   </section>
   <table class=table>
     <thead>
         <tr>
             <th class=titles>NOMBRES   </th>
             <th class=titles>APELLIDOS   </th>
             <th class=titles>CIUDAD   </th>
             <th class=titles>PROFECION   </th>
             <th class=titles>FECHA DE REGISTRO       </th>
             <th class=titles>OPCIONES   </th>
         </tr>
     </thead>
    <tbody> 
        
    <?php
    $query = "SELECT * FROM registros";
    $resultado_registros = mysqli_query($conn,$query);

    while($row = mysqli_fetch_array($resultado_registros)) { ?>
        <tr>
            <td class = "letras"><?php echo $row['nombre'] ?></td>
            <td class = "letras"><?php echo $row['apellido'] ?></td>
            <td class = "letras"><?php echo $row['ciudad'] ?></td>
            <td class = "letras"><?php echo $row['profecion'] ?></td>
            <td class = "letras"><?php echo $row['fecha_registro'] ?></td>

            <td>
                <a class="edit" href="edit.php?id=<?php echo $row['id'] ?>">
                Editar
            </a>
                <a class="eliminar" href="delete.php?id=<?php echo $row['id'] ?>">
                Eliminar
            </a>
            </td>
        </tr>

    <?php } ?>

    </tbody>
</table>
 </form>
 
</div>    
</body>
</html>