<?php 

require('conec.php');
$id_color=$_POST['id_color'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE colores set Color='$nombre' WHERE id_color='$id_color'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>