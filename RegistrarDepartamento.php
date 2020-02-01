<?php 

require('conec.php');

$nombre=$_POST['Nombre'];



	$insert= "INSERT INTO departamento (id_departamento,DNombre) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar Departamento");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>