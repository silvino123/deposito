<?php 

require('conec.php');
$id_dep=$_POST['id_departamento'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE departamento set DNombre='$nombre' WHERE id_departamento='$id_dep'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>