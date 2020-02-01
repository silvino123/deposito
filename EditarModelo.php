<?php 

require('conec.php');
$id_modelo=$_POST['id_modelo'];

$nombre=$_POST['Nombre'];
$marca=$_POST['Marca'];

$qss ="UPDATE modelos set MNombre='$nombre',Marca='$marca' WHERE id_modelo='$id_modelo'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>