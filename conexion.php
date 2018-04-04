
<?php
error_reporting(0);
class conexion{
	
	
	function __construct()
	{
		
		$hos='localhost';
		$user='root';
		$pass='';
		$db_name='otra';
		
		$this->con=mysqli_connect($host,$user,$pass,$db_name);
		
		if(!$this->con)
		{
			echo 'not connected
';
			
			}
		
			
					
		}
		function mostrarRegistro($sql)
		{
			$res=mysqli_query($this->con,$sql);
			$data=NULL;
			while($fila=mysqli_fetch_assoc($res))
			{
				$data[]=$fila;
				}
				return $data;
			}
	function actualizar($sql)
	{
		
		if(mysqli_query($this->con,$sql))
		{
			echo 'Successfully updated';
			
			}
			else 
			{
				echo 'Error updating';
				}
		}  
	function insertar($sql,$sql1)
	{
		
		if(empty($_POST['nombre'])|| empty($_POST['documento'])||empty($_POST['apellido'])||empty($_POST['edad'])||empty($_POST['genero'])||empty($_POST['pais'])||empty($_POST['provincia'])||empty($_POST['municipio'])||empty($_POST['barrio'])||empty($_POST['telefono'])){
			
			echo '<h3><center>All fields are required</center></h3>';
			
			exit;
			}else
			{
		if(!is_numeric($_POST['documento'])){ 
			echo '<h3><center>Document field only supports numbers</center></h3>';
			exit;
			}
			 if(!is_numeric($_POST['edad'])){ 
			echo '<h3><center>Age field only supports numbers</center></h3>';
			exit;
			}
			 if(!is_numeric($_POST['telefono'])){ 
			echo '<h3><center>Telephone field only supports numbers</center></h3>';
			exit;
			}
		else
		
		{
			$repe=mysqli_query($this->con,$sql1);
			if(mysqli_num_rows($repe)>0)
			{
				echo '<center>This user already exists</center>';
				exit;
				}else{
			
		if(mysqli_query($this->con,$sql))
		{
			echo 'Successfully inserted';
			}
			else
			{
				echo 'not inserted';
				}
		
		}
		}
	}}
	function buscarNombre($sql)
	{
		$res=mysqli_query($this->con,$sql);
		while($consulta=mysqli_fetch_array($res))
		{ 
		echo "<center><table width=\"200\" border=\"1\">
		
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
</table><br /></center>
";
		
		}
		
		
		}
}

?>