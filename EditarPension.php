<?php 

require('conec.php');
$id_pension=$_POST['id_pension'];

$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];

$qss ="UPDATE pension set PNombre='$nombre',Precio='$precio' WHERE id_pension='$id_pension'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>