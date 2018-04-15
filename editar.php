<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Edit data</title>
</head>
    <?php 

       require("conexion.php");

          $cod = $_GET['parametro'];

          $obj = new conexion();
          $dato = $obj->mostrarRegistro("select * from tablaotros where id='$cod'");

         $funcion = $_REQUES['funcion'];

      if( $funcion == "modificar"){

	        echo 'holaa';
	     }

  ?>

<body style="background:#C99;">
<center>
<h2>Edit User Data</h2>
<form action="index.php" method="post"  >
 <table style="width:500px;background:#33F" border="2" >

    <?php foreach($dato as $fila){ ?>

     <tr>
      <td><strong>ID</strong></td>
      <td><h2><strong style="color:#F00" ><center><?php echo $cod;?></center><h2></strong></td>
     </tr>

    <tr>
     <td><strong>First Name</strong></td>
     <td><input type="text" name="nombre" value="<?php echo $fila['nombre']?>"  style="width:400px"/></td>
    </tr>

    <tr>
     <td><strong>Last Name</strong></td>
     <td><input type="text" name="apellido" value="<?php echo $fila['apellido']?>"style="width:400px" /></td>
    </tr>

    <tr>
     <td><strong>Document</strong></td>
     <td><input type="text" name="documento" value="<?php echo $fila['documento'];?>" style="width:400px"/></td>
    </tr>

    <tr>
     <td><strong>Age</strong></td>
     <td><input type="text" name="edad" value="<?php echo $fila['edad']?>"style="width:400px" /></td>
    </tr>

    <tr>
     <td><strong>Gender</strong></td>
     <td><input type="text" name="genero" value="<?php echo $fila['genero']?>" style="width:400px"/></td>
    </tr>

    <tr>
     <td><strong>Country</strong></td>
     <td><input type="text" name="pais" value="<?php echo $fila['pais']?>" style="width:400px"/></td>
    </tr>

    <tr>
     <td><strong>Province</strong></td>
     <td><input type="text" name="provincia" value="<?php echo $fila['provincia']?>" style="width:400px"/></td>
    </tr>

    <tr>
     <td><strong>Municipality</strong></td>
     <td><input type="text" name="municipio" value="<?php echo $fila['municipio']?>" style="width:400px"/></td>
    </tr>
     <tr>
      <td><strong>Neighborhood or sector</strong></td>
      <td><input type="text" name="barrio" value="<?php echo $fila['barrio']?>" style="width:400px"/></td>
    </tr>

    <tr>
     <td><strong>Phone</strong></td>
     <td><input type="text" name="telefono" value="<?php echo $fila['telefono']?>" style="width:400px"/></td>
    </tr>

    <tr>
      <td colspan="2" align="center"><input  type="submit" value="GUARDAR" name="editar" /> </td>
    </tr>

      <?php } ?>

 </table>
   <input type="hidden" name="funcion" value="modificar" />
   <input type="hidden" name="cod" value="<?php echo $cod;?>" />
</form>
   </center>
</body>
</html>