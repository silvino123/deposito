<?php 
require("conec.php");

$Placas=$_POST['placa'];
$Fecha=$_POST['fecha'];
$Serie=$_POST['serie'];
$Automovil=$_POST['automovil'];
$Inventario=$_POST['inventario'];
$Motivo=$_POST['motivo'];
if($Placas!=null){
    $consulta=mysqli_query($con,"SELECT * from bitacora where Placas='$Placas'");
    while($row = mysqli_fetch_array($consulta)){
        
        echo "<tr id='delete".$row['id_bitacora']."'>";
        echo "<td><b>" . $row['id_bitacora'] .  "</b></td>"; 
        echo "<td><b>" . $row['Fecha'] .  "</b></td>"; 
        echo "<td><b>" . $row['Estatus'] .  "</b></td>"; 
        echo "<td><b>" . $row['Marca'] .  "</b></td>";
        echo "<td><b>" . $row['TipoVehiculo'] .  "</b></td>"; 
        echo "<td><b>" . $row['Modelo'] .  "</b></td>";
        echo "<td><b>" . $row['Placas'] .  "</b></td>"; 
        echo "<td><b>" . $row['Serie'] .  "</b></td>";
        echo "<td><b>" . $row['Motivo'] .  "</b></td>";
        echo"</tr>";

    }

}

        mysqli_close($con);
?>
