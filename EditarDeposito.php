<?php 

require('conec.php');
$id_deposi=$_POST['id_deposi'];

$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];

$qss ="UPDATE deposi set DepNombre='$nombre',Precio='$precio' WHERE id_deposi='$id_deposi'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>