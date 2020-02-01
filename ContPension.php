<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from pension ORDER BY PNombre ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_pension']."'>";
            echo "<td><b>" . $row['id_pension'] .  "</b></td>"; 
            echo "<td><b>" . $row['PNombre'] .  "</b></td>"; 
            echo "<td><b>" . $row['Precio'] .  "</b></td>"; 
            echo "<td>
                         
            <a data-target='#EditarPension' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_pension']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletepension(".$row['id_pension'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletepension(id_pension) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta Pension?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarPension.php',
           data:{delete_id:id_pension},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>