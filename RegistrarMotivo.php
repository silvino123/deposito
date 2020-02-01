<?php 

require('conec.php');

$nombre=$_POST['Nombre'];



	$insert= "INSERT INTO motivo (id_motivo,NMotivo) 
				  values ('','$nombre')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar motivo");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="catalogo.php";
    </script>';

 ?>