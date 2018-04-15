<?php
require("conexion.php");

   $busca = "";
   $busca = $_POST['buscar'];

   $obj = new conexion();
   
   if ($busca != "") {
   	
   	  $sql = "select * from tablaotros where nombre like '%".$busca."%'";
   	  $obj->buscarNombre($sql);
   }
   

?>