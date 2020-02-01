<?php 

require('conec.php');

$nombre=$_POST['Nombre'];



	$insert= "INSERT INTO mp (id_mp,MpNombre) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar M.P");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>