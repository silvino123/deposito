<?php 

require('conec.php');

$nombre=$_POST['Año'];



	$insert= "INSERT INTO lineas (id_linea,Nombre) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar operador");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>