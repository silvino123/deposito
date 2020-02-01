<?php 

require('conec.php');

$nombre=$_POST['Nombre'];



	$insert= "INSERT INTO departamento2 (id_departamento2,Zona) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar Departamento 2");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>