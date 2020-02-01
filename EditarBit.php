<?php 

require('conec.php');
$id_bit=$_POST['id_bitacora'];

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


$qss ="UPDATE bitacora set Ubicacion='$ubicacion',Operador='$operador',InventarioOficial='$inventarioOficial',Iph='$iph',OficialEntrega='$oficialentrega',Departamento='$departamento',Motivo='$motivo',Agencia='$departamento2',Origen='$origen',Estatus='$estatus',InventarioDVA='$inventarioDva',Marca='$marca',Linea='$linea',Modelo='$modelo',Placas='$placas',Serie='$serie',Color='$color',Llaves='$llaves',Ubicllaves='$ubicacionllaves',Observaciones='$observaciones',TipoVehiculo='$tipovehiculo',Fotografia='$fotografia' WHERE id_bitacora='$id_bit'"; 

$ejecuta_qss= mysqli_query($con,$qss) or die("error al actualizar datos");

mysqli_close($con);
header('Location: admin.php');


 ?>B