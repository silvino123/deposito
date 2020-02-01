<?php 

require('conec.php');
$id_marca=$_POST['id_marca'];

$nombre=$_POST['Nombre'];


$qss ="UPDATE marcas set NMarca='$nombre' WHERE id_marca='$id_marca'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: catalogo.php');


 ?>