<?php

require('conec.php');

if($_POST['rowid']) {
    $id_bit = $_POST['rowid']; 
    

    $rs = mysqli_query($con, "SELECT C.id_bitacora,C.Ciudad,C.Fecha,C.Ubicacion,S.ONombre,C.InventarioOficial,C.iph,OficialEntrega,D.DNombre,M.NMotivo,A.Zona,C.Origen,C.Estatus,C.InventarioDVA,X.NMarca,L.MNombre,Q.Linea,C.Placas,C.Serie,P.Color,C.Llaves,C.Ubicllaves,C.Observaciones,C.TipoVehiculo,C.Fotografia from bitacora C   inner join operadores S on C.Operador = S.id_operador inner join departamento D on C.Departamento = D.id_departamento inner join Motivo M on C.Motivo = M.id_motivo inner join Departamento2 A on C.Agencia = A.id_departamento2 inner join marcas x on C.Marca = x.id_Marca inner join modelos L on C.Linea = L.id_Modelo inner join lineas Q on C.Modelo = Q.id_linea inner join colores P on C.Color = P.id_color where C.id_bitacora ='$id_bit' ");
   
    $row = mysqli_fetch_array($rs);

    $id=$row['id_bitacora'];
    $fecha=$row['Fecha'];
$operador=$row['ONombre'];
$inventarioOficial=$row['InventarioOficial'];
$iph=$row['iph'];
$oficialentrega=$row['OficialEntrega'];
$departamento=$row['DNombre'];
$motivo=$row['NMotivo'];
$departamento2=$row['Zona'];
$origen=$row['Origen'];
$estatus=$row['Estatus'];
$inventarioDva=$row['InventarioDVA'];
$marca=$row['NMarca'];
$linea=$row['MNombre'];
$modelo=$row['Linea'];
$placas=$row['Placas'];
$serie=$row['Serie'] ;
$color=$row['Color'];
$llaves=$row['Llaves'];
$ubicacionllaves=$row['Ubicllaves'];
$observaciones=$row['Observaciones'];
$tipovehiculo=$row['TipoVehiculo'];
$ubicacion=$row['Ubicacion'];
$fotografia=$row['Fotografia'];
    
   
   
    // Fetch Records
    // Echo the data you want to show in modal

    echo "<div class='row'>
    <div class='col-12 col-lg-10'>
            <div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_color' name='id_color' required=''   value='".$id."'>
            </div>
            <div class='form-group'>
                <label for='sel1'>Nombre</label>
                <input type='text' class='form-control' id='Nombre'  name='Nombre' required='' value='".$operador."'>
            </div>
          
            
            ";
            
                                                                                                                
           
    
       echo" </div>
        </div> ";
     
   
 }
 mysqli_close($con);
?>
