<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$password=$_POST['Contrasena'];
$tipo=$_POST['Tipo'];


	$insert= "INSERT INTO usuarios (id_usuario,Nombre,Correo,Contrasena,Tipo,sucursal) 
				  values ('','$nombre','$correo','$password','$tipo','1')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar usuario");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="usuarios.php";
    </script>';

 ?>