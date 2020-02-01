<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT C.id_bitacora,C.Ciudad,C.Fecha,C.Ubicacion,S.ONombre,C.InventarioOficial,C.iph,OficialEntrega,D.DNombre,M.NMotivo,A.Zona,C.Origen,C.Estatus,C.InventarioDVA,X.NMarca,L.MNombre,Q.Linea,C.Placas,C.Serie,P.Color,C.Llaves,C.Ubicllaves,C.Observaciones,C.TipoVehiculo,C.Fotografia from bitacora C  inner join operadores S on C.Operador = S.id_operador inner join departamento D on C.Departamento = D.id_departamento inner join Motivo M on C.Motivo = M.id_motivo inner join Departamento2 A on C.Agencia = A.id_departamento2 inner join marcas x on C.Marca = x.id_Marca inner join modelos L on C.Linea = L.id_Modelo inner join lineas Q on C.Modelo = Q.id_linea inner join colores P on C.Color = P.id_color ORDER BY C.Fecha DESC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr style='color:#000000' id='delete".$row['id_bitacora']."'>";
            echo "<td><b>" . $row['Ciudad'] .  "</b></td>"; 
            echo "<td ><b>" . $row['Fecha'] .  "</b></td>"; 
            echo "<td><b>" . $row['Ubicacion'] .  "</b></td>";
            echo "<td ><b>" . $row['ONombre'] .  "</b></td>"; 
            echo "<td><b>" . $row['id_bitacora'] .  "</b></td>";
            echo "<td><b>" . $row['InventarioOficial'] .  "</b></td>";
            echo "<td><b>" . $row['iph'] .  "</b></td>";
            echo "<td><b>" . $row['OficialEntrega'] .  "</b></td>";
            echo "<td><b>" . $row['DNombre'] .  "</b></td>";
            echo "<td><b>" . $row['NMotivo'] .  "</b></td>";
            echo "<td><b>" . $row['Zona'] .  "</b></td>";
            echo "<td><b>" . $row['Origen'] .  "</b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b>" . $row['Estatus'] .  "</b></td>";
            echo "<td><b>" . $row['InventarioDVA'] .  "</b></td>";
            echo "<td><b>" . $row['NMarca'] .  "</b></td>";
            echo "<td><b>" . $row['MNombre'] .  "</b></td>";
            echo "<td><b>" . $row['Linea'] .  "</b></td>";
            echo "<td><b>" . $row['Placas'] .  "</b></td>";
            echo "<td><b>" . $row['Serie'] .  "</b></td>";
            echo "<td><b>" . $row['Color'] .  "</b></td>";
            echo "<td><b>" . $row['Llaves'] ." ".$row['Ubicllaves'].  "</b></td>";
            echo "<td > <a href='img/gallery/".$row['Fotografia']."'  data-gallery=''>" . $row['Fotografia'] ."</a></td>";
            echo "<td><b>" . $row['Observaciones'] .  "</b></td>";
            echo "<td><b>" . $row['TipoVehiculo'] .  "</b></td>";
            echo "<td  ><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td><b> </b></td>";
            echo "<td>
                         
            <a data-target='#EditarBitacora' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_bitacora']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
          </td>";
          echo "<td>
           <a onclick='deleteBit(".$row['id_bitacora'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           </td>";
          
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deleteBit(id_bitacora) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Registro?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarBitacora.php',
           data:{delete_id:id_bitacora},
           success:function(data){
             
           location.href ="admin.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>
  <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- blueimp gallery -->
    <script src="js/plugins/blueimp/jquery.blueimp-gallery.min.js"></script>