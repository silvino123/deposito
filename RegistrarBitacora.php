<?php 

require('conec.php');

$fecha=date("Y-m-d");
$operador=$_POST['Operador'];
$inventarioOficial=$_POST['InventarioAgente'];
$iph=$_POST['IPH'];
$oficialentrega=$_POST['AutoridadEntrega'];
$departamento=$_POST['Departamento'];
$motivo=$_POST['Motivo'];
$departamento2=$_POST['Departamento2'];
$origen=$_POST['Origen'];
$estatus=$_POST['Estatus'];
$inventarioDva=$_POST['InventarioDVA'];
$marca=$_POST['Marca'];
$linea=$_POST['Linea'];
$modelo=$_POST['Modelo'];
$placas=$_POST['Placas'];
$serie=$_POST['Serie'];
$color=$_POST['Color'];
$llaves=$_POST['Llaves'];
$ubicacionllaves=$_POST['Ubicacionllaves'];
$observaciones=$_POST['Observaciones'];
$tipovehiculo=$_POST['TipoVehiculo'];
$ubicacion=$_POST['Ubicacion'];
$fotografia=$_POST['Fotografia'];

	$insert= "INSERT INTO bitacora (id_bitacora,Ciudad,Fecha,Ubicacion,Operador,InventarioOficial,Iph,OficialEntrega,Departamento,Motivo,Agencia,Origen,FechaSalida,Estatus,InventarioDVA,Marca,Linea,Modelo,Placas,Serie,Color,Llaves,Ubicllaves,Observaciones,TipoVehiculo,Fotografia)
				  values ('','Hermosillo','$fecha','$ubicacion','$operador','$inventarioOficial','$iph','$oficialentrega','$departamento','$motivo','$departamento2','$origen',' ','$estatus','$inventarioDva','$marca','$linea','$modelo','$placas','$serie','$color','$llaves','$ubicacionllaves','$observaciones','$tipovehiculo','$fotografia')";

$ejecuta_insert= mysqli_query($con,$insert) or die("Error al insertar en la Bitacora ");

mysqli_close($con);
echo'<script type="text/javascript">
    
    location.href="admin.php";
    </script>';

 ?>