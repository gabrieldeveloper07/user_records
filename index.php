 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User records</title>

 <script>

     function mostrarID(cod){

	      window.location="http://localhost/crudEdit/editar.php?parametro="+cod;
	   }
	 
     function eliminar(cod){

	     window.location="http://localhost/crudEdit/index.php?parametro="+cod+"&funcion=eliminar";
	 
	   }
	 
	   function agregar(){

		  window.location = "http://localhost/crudEdit/agregar.php";
		 }

 </script>
 
   <?php
      require("conexion.php");
   
        $funcion = $_REQUEST['funcion'];
        $o = $_GET['parametro'];

    if($funcion != "eliminar"){
	    
        $cod = $_POST['cod'];
        $nom = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $documento = $_POST['documento'];
        $edad = $_POST['edad'];
        $genero = $_POST['genero'];
        $pais = $_POST['pais'];
        $provincia = $_POST['provincia'];
        $municipio = $_POST['municipio'];
        $barrio = $_POST['barrio'];
        $telefono = $_POST['telefono'];
      }

         $obj=new conexion();
      
      if($funcion=="modificar"){
	
	        $sql="update tablaotros set nombre='$nom',apellido='$apellido',documento='$documento',edad='$edad',genero='$genero',pais='$pais',provincia='$provincia',municipio='$municipio',barrio='$barrio',telefono='$telefono' where id='$cod'";
	       
            $obj->actualizar($sql);
	
           header("location: index.php");
	
		   }else if( $funcion == "eliminar"){

			     $sql = "delete from tablaotros where id='$o'";
			     $obj->actualizar( $sql );
			 
			 };
	        
          $obj  = new conexion();
	        $sql = "select * from tablaotros";
	        $dato = $obj->mostrarRegistro($sql);
	 
	 
	 
   ?> 
</head>

<body style="background:#FC9">
<input type="submit" onclick="window.print() " value="imprimir esta pagina" />

<form action="listado.php" method="post">
<h3>Search by name</h3>
<input type="search" name="buscar" placeholder="Buscar por nombre"/><input type="submit" name="btn1" value="Enviar" />
</form>
<center>
<fieldset width="100px">
<legend>User records</legend>
<h2></h2>


<input style="background:#00F;width:300px; height:30px" type="submit" onclick="agregar()"   value="ADD NEW USER" align="left"/>
<br />

<hr /><form action="index.php" method="post">

  <table  width="20%" height="30px"  border="1"> 
      <tr >
        <td style="color:#00C;background:#0F9"><h6><strong><h2>ID</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>First Name</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Last Name</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Document</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Age</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Gender</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Country</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Province</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Municipaly</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Neighborhood o sector</h2></strong></h6></td>
        <td style="color:#00C;background:#0F9"><h6><strong><h2>Phone</h2></strong></h6></td>
         <td style="color:#009;background:#3F0"><h6><strong><h2>Edit</h2></strong></h6></td>
         <td style="color:#F00;background:#ff0;"><h6><strong><h2>Remove</h2></strong></h6></td>
     <tr/>

    <?php foreach( $dato as $fila ) { ?>

     <tr style="background:#999">
        <td > <h4 ><?php echo $fila['id']?></h4> </td>
        <td> <h4><?php echo $fila['nombre']?></h4></td>
        <td> <h4><?php echo $fila['apellido']?></h4></td>
        <td> <h4><?php echo $fila['documento']?></h54></td>
        <td> <h4><?php echo $fila['edad']?></h4></td>
        <td> <h4><?php echo $fila['genero']?></h4></td>
        <td> <h4><?php echo $fila['pais']?></h4></td>
        <td><h4> <?php echo $fila['provincia']?></h4></td>
        <td> <h4><?php echo $fila['municipio']?></h4></td>
        <td> <h4><?php echo $fila['barrio']?></h4></td>
        <td><h4> <?php echo $fila['telefono']?></h4></td>
           <td><a href="#" onclick="mostrarID( <?php echo $fila['id']?>)">Edit</a></td>
           <td><a href="#" onclick="eliminar( <?php echo $fila['id']?>)" style="color:#F00;">Remove</a></td>
        
         
     <tr/>
      <?php }?>
  </table>
 

</fieldset>


</center>


</body>
</html>