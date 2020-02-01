<?php 

require('conec.php');

$nombre=$_POST['Nombre'];



	$insert= "INSERT INTO colores (id_color,Color) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar color");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>