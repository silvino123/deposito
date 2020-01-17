<?php 
require("conec.php");


$consulta=mysqli_query($con,"SELECT C.id_modelo,C.MNombre,C.Marca,S.Nombre from modelos C  inner join marcas S on C.Marca = S.id_marca");
        while($row = mysqli_fetch_array($consulta)){
            
            echo "<tr id='delete".$row['id_modelo']."'>";
            echo "<td><b>" . $row['id_modelo'] .  "</b></td>"; 
            echo "<td><b>" . $row['MNombre'] .  "</b></td>"; 
            echo "<td><b>" . $row['Nombre'] .  "</b></td>"; 
            echo "<td>
                         
            <a data-target='#EditarModelo' data-toggle='modal' class='btn btn-default' style='background-color:#757575;color:#fff' data-id=".$row['id_modelo']."><i class='fas fa-pencil-alt' title='Editar'></i></a>
           <a onclick='deletemodelo(".$row['id_modelo'].")' class='btn btn-danger'><i class='fas fa-trash' title='Eliminar'></i></a>
           
           </td>";
            echo"</tr>";

        }
        mysqli_close($con);
?>
<script type="text/javascript">
   
   function deletemodelo(id_modelo) {
    
    
     if (alertify.confirm('¿Esta seguro de que desea eliminar este Modelo?','El elemento se eliminara permanentemente', function(){
      
       $.ajax({
           type: 'post',
           url: 'EliminarModelo.php',
           data:{delete_id:id_modelo},
           success:function(data){
             
           location.href ="catalogo.php";
           }
       });
      },
      function(){alertify.error('Operacion Cancelada')})) {
 
 
     }
  
   }
 
  </script>