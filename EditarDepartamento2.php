<?php 

require('conec.php');
$id_dep2=$_POST['id_departamento2'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE departamento2 set Zona='$nombre' WHERE id_departamento2='$id_dep2'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>