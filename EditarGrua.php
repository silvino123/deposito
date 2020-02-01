<?php 

require('conec.php');
$id_grua=$_POST['id_grua'];

$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];

$qss ="UPDATE grua set GNombre='$nombre',Precio='$precio' WHERE id_grua='$id_grua'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>G