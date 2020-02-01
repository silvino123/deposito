<?php 

require('conec.php');
$id_linea=$_POST['id_linea'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE lineas set Linea='$nombre' WHERE id_linea='$id_linea'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>