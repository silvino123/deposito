<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from colores ORDER BY Color ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_color']."'>";
            echo "<td><b>" . $row['id_color'] .  "</b></td>"; 
            echo "<td><b>" . $row['Color'] .  "</b></td>"; 
            
            echo "<td>
                         
            <a data-target='#EditarColor' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_color']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletecolor(".$row['id_color'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletecolor(id_color) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este color?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarColor.php',
           data:{delete_id:id_color},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>