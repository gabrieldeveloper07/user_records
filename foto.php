<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<h3>Upload photos</h3>
<form action="" method="post" enctype="multipart/form-data">
<table border="1">
   <tr>
      <td>First Name</td>
      <td><input type="text" name="urlfoto" /></td>

   </tr>
   <tr>
      <td>Foto</td>
      <td><input type="file" name="filefoto" /></td>

   </tr>
   <tr >
     
      <td  colspan="2"align="center"> <input type="submit" name="btnfoto" /></td>

   </tr>

</table>
</form>
<img src="foto/koala.jpg" width="200" height="200" />
<?php  
require("conexion.php");
$j=new conexion();
$nombre=$_POST['urlfoto'];
$fotofile=$_FILES['filefoto']["name"];
$ruta=$_FILES['filefoto']['tmp_name'];
$destino="foto/".$fotofile;
copy($ruta,$destino);
mysqli_query($j->con,"insert into tablaotros (nombrefoto,foto)values ('$nombre','$fotofile')");



?>
</body>
</html>