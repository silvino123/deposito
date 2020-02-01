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

  
   echo" <div class='row'>
        <h3 style='color:red'>Información de Entrada</h3>
<div class=' col-lg-3' >
<div class='form-group' style='display: none'>
                <label for='sel1'>Id</label>
                <input type='text' class='form-control' id='id_bitacora' name='id_bitacora' required=''   value='".$id."'>
            </div>
<label for='sel1'style='color:#37474f'>Operador</label>
<select class='form-control' id='Operador' name='Operador' required=''>
";
 


$rs = mysqli_query($con, "SELECT * FROM operadores");

while($row = mysqli_fetch_array($rs)){
     if($row['ONombre']==$operador){
    echo"<option value=".$row['id_operador'] ." selected >". $row['ONombre'] ."</option>";
     }
     else{
      echo"<option value=".$row['id_operador'] ."  >". $row['ONombre'] ."</option>";   
     }


}


      

echo"</select>
</div>
<div class=' col-lg-3'>
<label for='sel1'style='color:#37474f'>Autoridad que Entrega</label>
<input type='text' class='form-control' id='AutoridadEntrega' name='AutoridadEntrega' required='' value='".$oficialentrega."' >
</div>
<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Departamento</label>
<select class='form-control' id='Departamento' name='Departamento' required=''>";

$xs = mysqli_query($con, "SELECT * FROM departamento");

while($rows = mysqli_fetch_array($xs)){
 if($rows['DNombre']==$departamento){
    echo"<option value=".$rows['id_departamento'] ." selected >". $rows['DNombre'] ."</option>";
 }
 else{
    echo"<option value=".$rows['id_departamento'] ."  >". $rows['DNombre'] ."</option>"; 
 }


}


     

echo"</select>
</div>
<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Motivo</label>
<select class='form-control' id='Motivo' name='Motivo' required=''>";

$xs = mysqli_query($con, "SELECT * FROM motivo");

while($rows = mysqli_fetch_array($xs)){
if($rows['NMotivo']==$motivo){
    echo"<option value=".$rows['id_motivo'] ." selected >". $rows['NMotivo'] ."</option>";
}
else{
    echo"<option value=".$rows['id_motivo'] ."  >". $rows['NMotivo'] ."</option>";
}


}

echo"</select>
</div>   

</div>

<div class='row'>
 
<div class=' col-lg-3' >
<label for='sel1' style='color:#37474f'>Zona o Agencia</label>
<select class='form-control' id='Departamento2' name='Departamento2' required=''>";

$rss = mysqli_query($con, "SELECT * FROM departamento2");

while($row2 = mysqli_fetch_array($rss)){
if($row2['Zona']==$departamento2){
    echo"<option value=".$row2['id_departamento2'] ." selected >". $row2['Zona'] ."</option>";
}
else{
echo"<option value=".$row2['id_departamento2'] ."  >". $row2['Zona'] ."</option>";
}


}


     

echo"</select>
</div>
<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Origen</label>
<input type='text' class='form-control' id='Origen' name='Origen' required=''value='".$origen."' >
</div>

<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Estatus</label>
<select class='form-control' id='Estatus' name='Estatus' required=''>";
if($estatus=="Patio"){
   echo" <option value='Patio' selected>Patio</option>
    <option value='Liberado'>Liberado</option>";
}
if($estatus=="Liberado"){
    echo" <option value='Patio'>Patio</option>
     <option value='Liberado' selected>Liberado</option>";
 }


echo"</select>
</div>   
<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Inventario Agente</label>
<input type='number' class='form-control' id='InventarioAgente' name='InventarioAgente' required=''value='".$inventarioOficial."' >
</div>
</div>

<br>

<div class='row'>
 
 <div class=' col-lg-3' >
 <label for='sel1' style='color:#37474f'>Inventario DVA</label>
 
<input type='number' class='form-control' id='InventarioDVA' name='InventarioDVA' value='".$inventarioDva."' >
</div>
 <div class=' col-lg-3'>
 <label for='sel1' style='color:#37474f'># IPH</label>
     <input type='number' class='form-control' id='IPH' name='IPH' required=''value='".$iph."' >
 </div>
 
 <div class=' col-lg-3'>
 
</div>   
<div class=' col-lg-3'>
 
 </div>
 </div>
<!-- Informacion del vehiculo -->
<div class='row'>
        <h3 style='color:red'>Información del Vehículo</h3>
<div class=' col-lg-3' >
<label for='sel1' style='color:#37474f'>Marca</label>
<select class='form-control' id='Marca' name='Marca' required='' onchange='CargarLineas(this.value);'>";
 


$rs = mysqli_query($con, "SELECT * FROM marcas ORDER BY NMarca ASC");

while($row3 = mysqli_fetch_array($rs)){
if($row3['NMarca']==$marca){
    echo"<option value=".$row3['id_marca'] ." selected >". $row3['NMarca'] ."</option>";
}
else{
  echo"<option value=".$row3['id_marca'] ."  >". $row3['NMarca'] ."</option>";  
}

} 
echo" </select>";
echo"</div>
<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Tipo</label>
<select class='form-control' id='Linea' name='Linea' required=''>
";

$qsr = mysqli_query($con, "SELECT * FROM modelos  ORDER BY MNombre DESC");

while($row2 = mysqli_fetch_array($qsr)){
if( $row2['MNombre']==$modelo){
    echo"<option value=".$row2['id_modelo'] ." selected  >". $row2['MNombre'] ."</option>";
}
else{
 echo"<option value=".$row2['id_modelo'] ."  >". $row2['MNombre'] ."</option>";   
}


}


echo" </select>";




echo"</div>
<div class=' col-lg-2'>
<label for='sel1' style='color:#37474f'>Modelo</label>
<select class='form-control' id='Modelo' name='Modelo' required=''>";



$qsr = mysqli_query($con, "SELECT * FROM lineas  ORDER BY Linea DESC");

while($row2 = mysqli_fetch_array($qsr)){
if( $row2['Linea']==$linea){
    echo"<option value=".$row2['id_linea'] ." selected  >". $row2['Linea'] ."</option>";
}
else{
 echo"<option value=".$row2['id_linea'] ."  >". $row2['Linea'] ."</option>";   
}


}


    

echo"</select>
</div>
<div class=' col-lg-2'>
<label for='sel1' style='color:#37474f'>Color</label>
<select class='form-control' id='Color' name='Color' required=''>";

$qsr = mysqli_query($con, "SELECT * FROM colores ORDER BY Color ASC");

while($row6 = mysqli_fetch_array($qsr)){
if($row6['Color']==$color){
    echo"<option value=".$row6['id_color'] ." selected >". $row6['Color'] ."</option>";
}
else{
  echo"<option value=".$row6['id_color'] ."  >". $row6['Color'] ."</option>";  
}


}


    

echo"</select>
</div>   
<div class=' col-lg-2'>
<label for='sel1' style='color:#37474f'>Placas</label>
<input type='text' class='form-control' id='Placas' name='Placas' required='' value='".$placas."'>
</div>
</div>


<div class='row'>
 
<div class=' col-lg-3' >
<label for='sel1' style='color:#37474f'>Serie</label>
<input type='text' class='form-control' id='Serie' name='Serie' required='' value='".$serie."' >
</div>
<div class=' col-md-2'>
<label for='sel1' style='color:#37474f'>Llaves</label>
<select class='form-control' id='Llaves' name='Llaves' required='' onchange='seleccionado()'>";
if($llaves=="Si"){
  echo " <option value='Si' selected>Si</option>
    <option value='No'>No</option>";
}
if($llaves=="No"){
    echo " <option value='Si' >Si</option>
      <option value='No' selected>No</option>";
  }

echo"</select>

</div>";
if($llaves=="Si"){
 echo" <div class=' col-lg-2 ocultar'  id='opc1' >
<label for='sel1' style='color:#37474f'>Ubicacion llaves</label>
<input type='text' class='form-control' id='Ubicacionllaves' name='Ubicacionllaves' value='".$ubicacionllaves."'  >
</div> "; 
}
if($llaves=="No"){
    echo" <div class=' col-lg-2 ocultar' style='display:none' id='opc1' >
   <label for='sel1' style='color:#37474f'>Ubicacion llaves</label>
   <input type='text' class='form-control' id='Ubicacionllaves' name='Ubicacionllaves'   >
   </div> "; 
   }


echo"<div class=' col-lg-3'>
<label for='sel1' style='color:#37474f'>Tipo Vehículo</label>
<select class='form-control' id='TipoVehiculo' name='TipoVehiculo' required=''>";
if($tipovehiculo=="Remolque"){
   echo" <option value='Remolque' selected>Remolque</option>
    <option value='Vagoneta'>Vagoneta</option>
    <option value='Sedan'>Sedan</option>
    <option value='Tractocamion'>Tractocamion</option>
    <option value='Motocicleta'>Motocicleta</option>
    <option value='Bicicleta'>Bicicleta</option>
    <option value='Pick up'>Pick up</option>
    <option value='Tonelada'>Tonelada</option>";
}
if($tipovehiculo=="Vagoneta"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' selected>Vagoneta</option>
     <option value='Sedan'>Sedan</option>
     <option value='Tractocamion'>Tractocamion</option>
     <option value='Motocicleta'>Motocicleta</option>
     <option value='Bicicleta'>Bicicleta</option>
     <option value='Pick up'>Pick up</option>
     <option value='Tonelada'>Tonelada</option>";
 }
 if($tipovehiculo=="Sedan"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' >Vagoneta</option>
     <option value='Sedan' selected>Sedan</option>
     <option value='Tractocamion'>Tractocamion</option>
     <option value='Motocicleta'>Motocicleta</option>
     <option value='Bicicleta'>Bicicleta</option>
     <option value='Pick up'>Pick up</option>
     <option value='Tonelada'>Tonelada</option>";
 }
 if($tipovehiculo=="Tractocamion"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' >Vagoneta</option>
     <option value='Sedan' >Sedan</option>
     <option value='Tractocamion' selected>Tractocamion</option>
     <option value='Motocicleta'>Motocicleta</option>
     <option value='Bicicleta'>Bicicleta</option>
     <option value='Pick up'>Pick up</option>
     <option value='Tonelada'>Tonelada</option>";
 }
 if($tipovehiculo=="Motocicleta"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' >Vagoneta</option>
     <option value='Sedan' >Sedan</option>
     <option value='Tractocamion' >Tractocamion</option>
     <option value='Motocicleta'selected>Motocicleta</option>
     <option value='Bicicleta'>Bicicleta</option>
     <option value='Pick up'>Pick up</option>
     <option value='Tonelada'>Tonelada</option>";
 }
 if($tipovehiculo=="Bicicleta"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' >Vagoneta</option>
     <option value='Sedan' >Sedan</option>
     <option value='Tractocamion' >Tractocamion</option>
     <option value='Motocicleta'>Motocicleta</option>
     <option value='Bicicleta' selected>Bicicleta</option>
     <option value='Pick up'>Pick up</option>
     <option value='Tonelada'>Tonelada</option>";
 }
 if($tipovehiculo=="Pick up"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' >Vagoneta</option>
     <option value='Sedan' >Sedan</option>
     <option value='Tractocamion' >Tractocamion</option>
     <option value='Motocicleta'>Motocicleta</option>
     <option value='Bicicleta' >Bicicleta</option>
     <option value='Pick up' selected>Pick up</option>
     <option value='Tonelada'>Tonelada</option>";
 }
 if($tipovehiculo=="Tonelada"){
    echo" <option value='Remolque' >Remolque</option>
     <option value='Vagoneta' >Vagoneta</option>
     <option value='Sedan' >Sedan</option>
     <option value='Tractocamion' >Tractocamion</option>
     <option value='Motocicleta'>Motocicleta</option>
     <option value='Bicicleta' >Bicicleta</option>
     <option value='Pick up' >Pick up</option>
     <option value='Tonelada' selected>Tonelada</option>";
 }


echo"</select>
</div>   
<div class=' col-lg-3' >
<label for='sel1' style='color:#37474f'>Observaciones</label>
<textArea type='text' class='form-control' id='Observaciones' name='Observaciones'  >".$observaciones."</textArea>
</div>
<div class=' col-lg-4' >
<label for='sel1' style='color:#37474f'>Fotografia</label>";
if($fotografia==null){
    echo"<input type='file' class='form-control' id='Fotografia' name='Fotografia' >";
}
else{
 echo" <input type='file' class='form-control' id='Fotografia' name='Fotografia' value='".$fotografia."' > "; 
}

echo"</div>
<div class=' col-lg-3' >
<label for='sel1' style='color:#37474f'>Ubicacion Deposito</label>
<input type='text' class='form-control' id='Ubicacion' name='Ubicacion' value='".$ubicacion."' >
</div>
</div>";
     
   
 }
 mysqli_close($con);
?>
