<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$precio=$_POST['Precio'];


	$insert= "INSERT INTO pension (id_pension,PNombre,Precio) 
				  values ('','$nombre','$precio')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar Pension");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>