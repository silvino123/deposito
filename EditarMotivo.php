<?php 

require('conec.php');
$id_mo=$_POST['id_motivo'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE motivo set NMotivo='$nombre' WHERE id_motivo='$id_mo'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>