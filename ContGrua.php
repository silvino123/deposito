<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from grua ORDER BY GNombre ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_grua']."'>";
            echo "<td><b>" . $row['id_grua'] .  "</b></td>"; 
            echo "<td><b>" . $row['GNombre'] .  "</b></td>"; 
            echo "<td><b>" . $row['Precio'] .  "</b></td>"; 
            echo "<td>
                         
            <a data-target='#EditarGrua' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_grua']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletegrua(".$row['id_grua'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletegrua(id_grua) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar esta grua?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarGrua.php',
           data:{delete_id:id_grua},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>