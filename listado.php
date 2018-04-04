<?php  


echo '<a href="index.php">Back to main page<a/>';
echo '<h2><center>Matches found</center></h2>';
require("conexion.php");
$obj=new conexion();
if(isset($_POST['btn1']))
	 {   
	 $busca="";

     $busca=$_POST['buscar'];
	 if($busca !=""){
		
		 $sql="select * from tablaotros where nombre  like '%".$busca."%'";
		 $obj->buscarNombre($sql);
		 
	 }
		 }


?>