<?php 

require('conec.php');
$id_mp=$_POST['id_mp'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE mp set MpNombre='$nombre' WHERE id_mp='$id_mp'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>