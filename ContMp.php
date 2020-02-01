<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from mp ORDER BY MpNombre ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_mp']."'>";
            echo "<td><b>" . $row['id_mp'] .  "</b></td>"; 
            echo "<td><b>" . $row['MpNombre'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarMp' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_mp']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletemp(".$row['id_mp'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletemp(id_mp) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este M.P?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarMp.php',
           data:{delete_id:id_mp},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>