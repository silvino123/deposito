<?php 

require('conec.php');
$id_operador=$_POST['id_operador'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE operadores set ONombre='$nombre' WHERE id_operador='$id_operador'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>