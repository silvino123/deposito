<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT * from deposi ORDER BY DepNombre ASC");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_deposi']."'>";
            echo "<td><b>" . $row['id_deposi'] .  "</b></td>"; 
            echo "<td><b>" . $row['DepNombre'] .  "</b></td>"; 
            echo "<td><b>" . $row['Precio'] .  "</b></td>"; 
            echo "<td>
                         
            <a data-target='#EditarDeposito' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_deposi']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletedeposito(".$row['id_deposi'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletedeposito(id_deposi) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Deposito?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarDeposito.php',
           data:{delete_id:id_deposi},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>