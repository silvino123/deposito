<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from motivo ORDER BY NMotivo ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_motivo']."'>";
            echo "<td><b>" . $row['id_motivo'] .  "</b></td>"; 
            echo "<td><b>" . $row['NMotivo'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarMotivo' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_motivo']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletemotivo(".$row['id_motivo'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletemotivo(id_motivo) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Motivo?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarMotivo.php',
           data:{delete_id:id_motivo},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>