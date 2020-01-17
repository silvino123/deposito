<?php 

require('conec.php');

$nombre=$_POST['Nombre'];



	$insert= "INSERT INTO marcas (id_marca,Nombre) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar marca");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>