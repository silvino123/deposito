<?php 

require('conec.php');
$id_usuario=$_POST['id_usuario'];

$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$password=$_POST['Contrasena'];
$tipo=$_POST['tipo'];


$qss ="UPDATE usuarios set Nombre='$nombre',Correo='$correo',Contrasena = '$password', Tipo = '$tipo' WHERE id_usuario='$id_usuario'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: usuarios.php');


 ?>