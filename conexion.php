
<?php
error_reporting(0);
class conexion{
	
	
	function __construct()
	  {
		
		  $hos = 'localhost';
		  $user = 'root';
		  $pass = '';
		  $db_name = 'otra';
		
		$this->con = mysqli_connect($host,$user,$pass,$db_name) or die("Error al conetar");
			
	   }
	
	function mostrarRegistro($sql)
	  {
		  $res = mysqli_query($this->con,$sql);
		  $data = NULL;

			
		 while($fila = mysqli_fetch_assoc($res))
		   {
				
		       $data[] = $fila;
		  		
		   }
				return $data;
	  }
	
	function actualizar($sql)
	{
		
		if( mysqli_query($this->con,$sql)){


			echo 'Successfully updated';
			
		 }else{

			echo 'Error updating';

			}
		}  
	
	function insertar($sql,$sql1)
	{
		
		
			$repe = mysqli_query($this->con,$sql1);
			if( mysqli_num_rows( $repe ) > 0){


				echo '<center>This user already exists</center>';
				exit;
				
			}else{
			
		     if(mysqli_query($this->con,$sql)){

			   echo 'Successfully inserted';
			}else{

			  echo 'not inserted';
				
			}
		
		}
		
	}

	function buscarNombre($sql)
	 {
		
		$res = mysqli_query( $this->con,$sql);

		while( $consulta = mysqli_fetch_array( $res ))
		{ 

		  echo "<center>
                   <table width=\"200\" border=\"1\">
		              <tr>
		               <td><strong>First Name</strong></td>
		               <td><strong>Last Name</strong></td>
		               <td><strong>Document</strong></td>
		               <td><strong>Age</strong></td>
		               <td><strong>Geneder</strong></td>
		               <td><strong>Country</strong></td>
		               <td><strong>Provincia</strong></td>
		               <td><strong>Municipaly</strong></td>
		               <td><strong>Barrio o sector</strong></td>
		            <td><strong>Phone</strong></td>
		        </tr>
                <tr>
                    <td><b>".$consulta['nombre']."</td>
  
  
                    <td>".$consulta['apellido']."</td>
 
  
                    <td>".$consulta['documento']."</td>
  
 
                    <td>".$consulta['edad']."</td>
 
  
                    <td>".$consulta['genero']."</td>
 
  
                    <td>".$consulta['pais']."</td>
 

                    <td>".$consulta['provincia']."</td>
 
 
                    <td>".$consulta['municipio']."</td>
  
                    <td>".$consulta['barrio']."</td>
 
                    <td>".$consulta['telefono']."</td>
	
                </tr>
           </table><br />
           </center>";
		
		 
		  }
		
		
	}
	function noempty($datos){

		if (empty($datos)) {
			return false;

		}

		 return true;

	 }

	function soloNumeros($datos){

		if (!is_numeric($datos)) {
			return false;
		}
		return true;
	}

}

?>