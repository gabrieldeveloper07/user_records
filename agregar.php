<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>User Registration</title>
</head>

<body style="background:#09F;">

 <center>
   <h3>Register New Users</h3>
<form action="agregar.php" method="post">
    <table width="200" border="2">
      <tr>
        <td>First name</td>
        <td><input type="text" name="nombre"  /></td>
      </tr>

      <tr>
        <td>Last name</td>
        <td><input type="text" name="apellido" /></td>
      </tr>

      <tr>
        <td>Document</td>
        <td><input type="text" name="documento" /></td>
      </tr>

      <tr>
       <td>Age</td>
       <td><input type="text" name="edad" /></td>
      </tr>

      <tr>
       <td>Gender</td>
       <td ><input type="radio" name="genero"  value="Femenino"/>Female

         <input type="radio" name="genero" value="Masculino"/>Male </td>
      </tr>

      <tr>
       <td>Country</td>
       <td><select name="pais">
<option value="Congo" >Congo</option>
<option value="Congo, República Democrática del" >Congo, República Democrática del</option>
<option value="Islas Cook" >Islas Cook</option>
<option value="Costa de Marfíl" >Costa de Marfíl</option>
<option value="Croacia (Hrvatska)" >Croacia (Hrvatska)</option>
<option value="Cuba"” >Cuba</option>
<option value="Chipre" >Chipre</option>
<option value="República Checa" >República Checa</option>
<option value="Dinamarca" >Dinamarca</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="República Dominicana" >República Dominicana</option>
<option value="Timor Oriental" >Timor Oriental</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egipto" >Egipto</option>
<option value="El Salvador" >El Salvador</option>
<option value="Guinea Ecuatorial" >Guinea Ecuatorial</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Etiopía" >Etiopía</option>
<option value="Islas Malvinas" >Islas Malvinas</option>
<option value="Islas Faroe" >Islas Faroe</option>
<option value="Fiji" >Fiji</option>
<option value="Finlandia" >Finlandia</option>
<option value="Francia" >Francia</option>
<option value="Guayana Francesa" >Guayana Francesa</option>
<option value="Polinesia Francesa" >Polinesia Francesa</option>
<option value="Territorios franceses del Sur" >Territorios franceses del Sur</option>
<option value="Gabón" >Gabón</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Alemania" >Alemania</option>

<option value="Guayana" >Guayana</option>
<option value="Haití" >Haití</option>
<option value="Islas Heard y McDonald" >Islas Heard y McDonald</option>
<option value="Honduras"  >Honduras</option>

         </select>
        </td>
     </tr>

     <tr>
        <td>Province</td>
        <td><input type="text" name="provincia" /></td>
     </tr>

     <tr>
      <td>Municipality</td>
      <td><input type="text" name="municipio" /></td>
     </tr>

    <tr>
     <td>Neighborhood or sector</td>
     <td><input type="text" name="barrio" /></td>
    </tr>

     
    <tr>
     <td>Phone</td>
     <td><input type="text" name="telefono" /></td>
    </tr>
    <tr>
      <td colspan="2" style="background:#0F0"align="center"><input  type="submit" value="
   save" name="editar" /> </td>
    </tr>
    
 </table>
</form>

 </center>

    <?php  

require( "conexion.php" );
  
    $obj=new conexion();

   if( isset($_POST['editar'])){

         $nom = $_POST['nombre'];
         $apell = $_POST['apellido'];
         $docu = $_POST['documento'];
         $edad = $_POST['edad'];
         $genero = $_POST['genero'];
         $pais = $_POST['pais'];
         $provincia = $_POST['provincia'];
         $municipio = $_POST['municipio'];
         $barrio = $_POST['barrio'];
         $telefono=$_POST['telefono'];
         
         foreach ($_POST as $key => $value) {
           
           switch ($key) {
             case 'nombre':
                if($obj->noempty($value) == false){ echo 'campo nombre es obligaatorio';
                 exit;
               } 
              break;
               case 'apellido':
                if($obj->noempty($value) == false){ echo 'campo apellido es obligaatorio';
                 exit;
               } 
               break;
               case 'documento':
                if($obj->noempty($value) == false){ echo 'campo documento es obligaatorio';

                 exit;
               }else if ($obj->soloNumeros($value) == false) {
                echo 'campo documento solo admite numero';
                exit;
               }
               break;
               case 'genero':
                if($obj->noempty($value) == false){ echo 'campo genero es obligaatorio';
                 exit;
               } 
               break;
               case 'edad':
                if($obj->noempty($value) == false){ echo 'campo edad es obligaatorio';
                 exit;
               }else if ($obj->soloNumeros($value) == false) {
                echo 'campo edad solo admite numero';
                exit;
               } 
               break;
               case 'pais':
                if($obj->noempty($value) == false){ echo 'campo pais es obligaatorio';
                 exit;
               } 
               break;
               case 'provincia':
                if($obj->noempty($value) == false){ echo 'campo provincia es obligaatorio';
                 exit;
               } 
               break;
               case 'municipio':
                if($obj->noempty($value) == false){ echo 'campo municipio es obligaatorio';
                 exit;
               } 
               break;
               case 'barrio':
                if($obj->noempty($value) == false){ echo 'campo barrio es obligaatorio';
                 exit;
               } 
               break;
               case 'telefono':
                if($obj->noempty($value) == false){ echo 'campo telefono es obligaatorio';
                 exit;
               }else if ($obj->soloNumeros($value) == false) {
                echo 'campo telefono solo admite numero';
                exit;
               } 
               break;
             
             default:
               # code...
               break;
           }
         }

         $sql1="select * from tablaotros where documento='$docu'";

        

         $obj->insertar("insert into tablaotros (nombre,apellido,documento,edad,genero,pais,provincia,municipio,barrio,telefono)values ('$nom','$apell','$docu','$edad','$genero','$pais','$provincia','$municipio','$barrio','$telefono')",$sql1);

         header("location: index.php");
      }

   ?>
</body>
</html>