<?php 

require('conec.php');

$nombre=$_POST['Nombre'];
$marca=$_POST['Marca'];


	$insert= "INSERT INTO modelos (id_modelo,MNombre,Marca) 
				  values ('','$nombre','$marca')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar modelo");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>